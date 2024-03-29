<?php namespace App\Models;

use CodeIgniter\Model;

class RIT_LDAP_MOdel extends Model {
    /*
     * DEPENDENCIES
     * *****************************************************************
     * RIT Open LDAP Service
     *      Must be running at ldap.rit.edu on port 636
     *
     * ritLDAPPersonUser & ritLDAPPersonPass Environment Variables
     *      Both must be set in the .env file
     *      Stored in Passwordstate in Inside 2 \ SCB LDAP Feed Service Account
     *
     * *****************************************************************
     * PUBLIC FUNCTIONS
     * *****************************************************************
     *
     * GetAttribute($username, $attribute)
     *      Used to get a particular attribute/field based on RIT Computer Account Username
     *
     * GetAllData($username)
     *      Used to get all data found for a particular RIT Computer Account Username
     *
     * *****************************************************************
     */

    var $ldapuser;
    var $ldappass;
    var $ldaphost;
    var $ldapbasedn;
    var $ldapConnection;

    public function __construct() {
        parent::__construct();

        $this->ldapuser = $_SERVER['rit_ldap_username'];
        $this->ldappass = $_SERVER['rit_ldap_password'];
        $this->ldaphost = 'ldaps://ldap.rit.edu:636';
        $this->ldapbasedn = 'dc=rit,dc=edu';
    }

    private function tfe_ldap_open(&$ldap)
    {
        /*
         * Setups a connection to the LDAP server and holds it open.
         *
         * Arguments:
         * ldap (bi-directional): ldap is the connection information.
         *
         * Return:
         * 0: Successful
         * Anything else: Not successful
         */
        $ldap = @ldap_connect($this->ldaphost);
        @ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);

        if (!$ldap)
            return (1);

        $stat = @ldap_bind($ldap, "uid=$this->ldapuser,ou=People,dc=rit,dc=edu", "$this->ldappass");
        return (@ldap_errno($ldap));
    }

    private function tfe_ldap_close(&$ldap)
    {
        /*
         * Closes an open connection to the LDAP server.
         *
         * Arguments:
         * ldap (bi-directional): ldap is the connection information.
         */
        @ldap_close($ldap);
    }

    private function tfe_ldap_search(&$ldap, $searchString, $searchOption="username", $attribute="NONE")
    {
        /*
         * Searches for an entry by RIT UID and returns what is found.
         *
         * Arguments:
         * ldap (bi-directional): ldap is the connection information.
         * searchString: RIT Username or RIT University ID
         * searchOption: <optional>:
         *           =username: Searches based on RIT Username
         *           =uid: Searches based on RIT University ID
         * attribute <optional>:
         *           =NONE: Returns all data
         *           =<argument name>: Returns data filtered by specified LDAP Field
         *
         * Return:
         * An array of data from the LDAP Server
         */

        // FOR Searching by both RIT UID & RIT Username: $filter = "(&(ritEduRITId=$uid)(uid=$username))";

        // Determing the filter for search based on searchOption
        if($searchOption == "username") {
            $filter = "(uid=$searchString)";
        } else {
            $filter = "(ritEduRITid=$searchString)";
        }
        if ($attribute=="NONE") {
            $ldap_result = @ldap_search($ldap, $this->ldapbasedn, $filter);
            $ldap_entries = @ldap_get_entries($ldap, $ldap_result);

        } else {
            unset ( $attrs );
            $attrs[0] = $attribute;
            $ldap_result = @ldap_search ( $ldap, "dc=rit,dc=edu", $filter, $attrs );
            $ldap_entries = @ldap_get_entries ( $ldap, $ldap_result );
        }

        return ($ldap_entries);
    }

    public function GetAttribute($searchString, $searchOption="username", $attribute) {
        /*
         * Gets the value of a single attribute from LDAP
         *
         * Arguments:
         * searchString: RIT Username or RIT University ID
         * searchOption: <optional>:
         *           =username: Searches based on RIT Username
         *           =uid: Searches based on RIT University ID
         * attribute: LDAP field that is needed
         *
         * Return:
         * A string of the value found.
         * Should something go wrong, ERROR is returned.
         */
        $ldapState = $this->tfe_ldap_open($this->ldapConnection);
        if ($ldapState == 0) {
            $results = $this->tfe_ldap_search($this->ldapConnection, $searchString, $searchOption, $attribute);
            $this->tfe_ldap_close($this->ldapConnection);
            // Should only get back one record, with one attribute, and one result

            try {
                return $results[0][$attribute][0];
            }
            catch(\Exception $e) {
                return "NOT FOUND";
            }
        } else {
            return "ERROR";
        }
    }

    public function GetAllData($searchString, $searchOption="username") {
        /*
         * Searches for an entry by RIT UID or Username and returns what is found.
         *
         * Arguments:
         * searchString: RIT Username or RIT University ID
         * searchOption: <optional>:
         *           =username: Searches based on RIT Username
         *           =uid: Searches based on RIT University ID
         *
         * Return:
         * An array of data from the LDAP Server
         * Should something go wrong, ERROR is returned.
         */
        $ldapState = $this->tfe_ldap_open($this->ldapConnection);
        if ($ldapState == 0) {
            $results = $this->tfe_ldap_search($this->ldapConnection, $searchString, $searchOption);
            $this->tfe_ldap_close($this->ldapConnection);
            return $results;
        } else {
            return "ERROR";
        }
    }
}
