<?php namespace App\Models;

use CodeIgniter\Model;

class Admin_Model extends Model {
    public function getRole($id = 0) {
        $db = \Config\Database::connect('appsportal');
        $builder = $db->table('role');
        $builder->select('id, text');
        if($id != 0) {
            $builder->where('id', $id);
        }
        $results = $builder->get();
        return $results->getResult();
    }
    public function getRoleMembers($roleId = 0) {
        $db = \Config\Database::connect('appsportal');
        $builder = $db->table('rolemapping');
        $builder->select('id, ritComputerAcct');
        $builder->where('roleId', $roleId);
        $results = $builder->get();
        return $results->getResult();
    }

    public function roleMemberDelete($id = 0) {
        $db = \Config\Database::connect('appsportal');
        $builder = $db->table('rolemapping');
        $builder->where('id', $id);
        $builder->delete();
    }

    public function roleMemberAdd($username = 'INVALID', $roleId = 0) {
        $db = \Config\Database::connect('appsportal');
        $builder = $db->table('rolemapping');
        $data = ['ritComputerAcct' => $username, 'roleId' => $roleId];
        $builder->insert($data);
    }
}