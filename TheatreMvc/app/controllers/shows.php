<?php
class shows extends Controller
{
    public $db;
    public function __construct() {
        
        $this->db=new Database;
    }
    public function show()
    {
     
       $result= $this->db->query('SELECT * FROM actors  ');
       
       $this->view('home/shows',compact('result'));
    }
}