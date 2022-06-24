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
        if($_POST){
            $sql = 'INSERT IGNORE INTO seats (id, seat_boolean) VALUES (50, 4)';
            $this->db->execute($sql);
            
        } 
        if(!$_POST){
            echo 'nemame POST';
        }

        if (isset($_POST['seatNumbersString'])) {
            $seatNumbers = $_POST['seatNumbersString'];
            echo 'prvIF';
            echo '<script>console.log('.$seatNumbers.')</script>';
            $this->view('home/buyticket');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $seatNumbers = $_POST['seatNumbersString'];
            //$seatNumbers = $this->input->post('seatNumbersString');
            //$seatNumbers = explode(',', (string)$seatNumbers);
            // $data=array(
            //     'seatNumbersString'=>$this->input->post('seatNumbersString'),
            // );
            echo 'vtorIF';
            echo '<script>console.log('.$seatNumbers.')</script>';
            $this->view('home/buyticket');
        }
        else{
            $this->db->query('SELECT * FROM shows');
            $data=$this->db->resultSet();
            $data[5]=0;
            if (!empty($_GET['1'])) {
                $pom =$_GET['1'];
                $this->db->query('SELECT seat_boolean FROM seats WHERE id = :pom');
                $this->db->bind(':pom', $pom);

                $result = $this->db->resultSet();
                $boolean = array_column($result, 'seat_boolean');
                if($boolean[0]==0)
                {
                    echo gettype($pom);
                    $pom = (int)$pom;
                    echo $pom;
                    $this->db->query('UPDATE seats SET seat_boolean =1  WHERE id = :pom');
                    $this->db->bind(':pom', $pom);
                    $this->db->execute();
                    $pom="Го резервиравте вашето седиште";
                    $data[5]=$pom;
                    $this->view('home/buyticket',$data);
                }
                else
                {
                    $pom="Зафатено седиште";
                    $data[5]=$pom;
                    $this->view('home/buyticket',$data);
                }
            
            }
            else
            {
            $this->view('home/buyticket',$data);
            }
        }
    }
}