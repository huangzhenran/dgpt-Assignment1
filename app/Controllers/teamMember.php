<?php
 namespace App\Controllers;
 class teamMember extends BaseController
 {
 public function index()
 {
     // connect to the model
 $places = new \App\Models\Peoples();
 // retrieve all the records
 $records = $places->findAll();
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions

  $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array($headings[1], $headings[8], $headings[7]);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        
        
        foreach ($records as $record) {
//$table->addRow($record->name,$record->description);
            $nameLink = anchor("teamMember/showme/$record->id", $record->name);
            $imge='<img width=300px height=150px src="/image/'.$record->image.'"/>';
            $table->addRow($nameLink,$imge ,$record->link);
        }
        $template = [//stlye
            'table_open' => '<table cellpadding="5px">',
            'cell_start' => '<td style="border: 1px solid #dddddd;">',
            'row_alt_start' => '<tr style="background-color:#dddddd">',
        ];
        $fields = [
            'title' => 'Team member Destinations',
            'heading' => 'Member Destinations',
            'footer' => 'Copyright Xavier'
        ];
        $table->setTemplate($template);
        return $parser->setData($fields)
                        ->render('templates\top') .
                $table->generate() .
                        $parser->setData($fields)
                        ->render('templates\bottom');
   
 }
 public function showme($id)
 {
     // connect to the model
 $places = new \App\Models\Peoples();
 // retrieve all the records
 $record = $places->find($id);
 // get a template parser
 $parser = \Config\Services::parser();
 // tell it about the substitions
 return $parser->setData($record)
 // and have it render the template with those
 ->render('oneplace');
 }
 }