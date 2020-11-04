<?php
namespace App\Models;
use  App\Models\Simple\CSVModel;
/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places extends CSVModel{

    //mock data : an array of records
     protected $origin = WRITEPATH . 'data/data.csv';
    protected $keyField = 'id';
    protected $validationRules = [];

}
