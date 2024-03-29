<?php namespace App\Models;

use CodeIgniter\Model;

class Security_Model extends Model {
    public function authorize($requiredRoleIds = [0], $ritComputerAcct = 'invalid') {
        $db = \Config\Database::connect('appsportal');
        $query = "SELECT id FROM rolemapping WHERE roleId IN (" . implode(",", $requiredRoleIds) . ") AND ritComputerAcct = '" . $ritComputerAcct . "';";
        $results = $db->query($query);

        /*echo "<pre>getRoleMembers Debugging\n";
        echo "query: " . $query . "\n";
        echo "results:\n";
        print_r($results->getResult());
        echo "\ncount: " . count($results->getResult()) . "\n";
        echo "</pre>";*/

        if (count($results->getResult()) > 0) {
            return true;
        } else {
            return false;
        }
    }
}