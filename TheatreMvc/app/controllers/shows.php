<?php
class shows extends Controller
{
    public $db;

    public function __construct() 
    {    
        $this->db=new Database;
    }

    public function show()
    {
        $this->db->query('SELECT * FROM shows');
        $data=$this->db->resultSet();
        $this->view('home/shows',$data);
    }
}