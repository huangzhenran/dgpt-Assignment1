<?php
 namespace App\Controllers;
 class Peoples extends \CodeIgniter\Controller
 {
 public function index()
 {
 // connect to the model
 $people = new \App\Models\Peoples();
 // retrieve all the records
 $records = $people->findAll();
 // JSON encode and return the result
 return json_encode($records);
 }
 }