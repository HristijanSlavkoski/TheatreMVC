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
    public function buyticket()
    {
     

        if (isset($_POST['seatNumbersString'])) {
            $seatNumbers = $_POST['seatNumbersString'];
            
            $result_array = array();
            $strings_array = explode(',', $seatNumbers);
            
            foreach ($strings_array as $each_number) {
                $result_array[] = (int) $each_number;
            }
            for($i=0;$i<count($result_array);$i++)
            {
                $this->db->query('UPDATE seats SET seat_boolean =1  WHERE id = :pom');
                $this->db->bind(':pom', $result_array[$i]);
                $this->db->execute();
            }
            
            $this->view('home/buyticket');
        }
        
            else
            {  $this->db->query('SELECT * FROM shows');
                $data=$this->db->resultSet();
                $this->db->query('SELECT * FROM seats');
                $seats=$this->db->resultSet();
                 array_push($data, $seats);
                
                 $a=(end($data)[10]->seat_boolean);
             
            $this->view('home/buyticket',$data);
            }
        }
    }
