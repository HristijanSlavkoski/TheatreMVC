<?php
class Home extends Controller
{
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->db=new Database;
    }
    
    //da probame da kreirame nekoja akcija
    public function index($name="")
    {
         //mmu gi davam predavam parametrite  echo $name;
         $user=$this->model('User');
         $user->name=$name;
  
         $this->view('home/index',['name'=>$user->name]);
    }   

    public function login()
    {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => ''
            ];
            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            }

            // Validate password on length, numeric values,
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
            } 

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $this->db->query('SELECT password FROM user WHERE username = :username');
                //Username param will be binded with the username variable
                $this->db->bind(':username', $data['username']);
                $result = $this->db->resultSet();
                $userPassword = array_column($result, 'password');
                if(password_verify($data['password'],$userPassword[0])){
                    session_start();
	                // Add values to the session.
	                 $_SESSION['loggedUser'] = $data['username']; // string
                    header('location: ' . URLROOT . '/public/actors/show');
                } else {
                    die('Wrong password');
                }
            }
        }
        $this->view('home/login', $data);
    }

    public function logout()
    {
        session_start();
        session_unset();
        header('location: ' . URLROOT . '/public/actors/show');
    }

    public function register()
    {     
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];
    
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

            // Validate password on length, numeric values,
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
                if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $hash = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['password'] = $hash;

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/public/home/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('register', $data);
    }   
}