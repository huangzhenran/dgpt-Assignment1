<?php
namespace App\Models;
use  App\Models\Simple\CSVModel;


/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Peoples extends CSVModel {

  
    //mock data : an array of records
        protected $origin = WRITEPATH . 'data/data_hero.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
    

//
//    public function findAll() {
//        return $this->data;
//    }
//
//    public function find($id = null) {
//        if (!empty($id) && isset($this->data[$id])) {
//            return $this->data[$id];
//        }
//        return null;
//    }

}
