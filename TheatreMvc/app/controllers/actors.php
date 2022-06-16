<?php
class actors extends Controller
{
    public $db;
    public function __construct() {
        
        $this->db=new Database;
    }
    public function show()
    {
     
       $result= $this->db->query('SELECT * FROM actors  ');
       
       $this->view('home/actors',compact('result'));
    }
}