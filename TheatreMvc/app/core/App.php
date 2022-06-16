<?php
error_reporting(E_ALL ^ E_WARNING);
class App {


    //ovie se difolten kontroler i metod pri startuvanje na app
   protected $controller="home";
   protected $method="index";
   
   //sega da gi zemime parametrite
   //home/index/parametar
   protected $param=[];




    public function __construct()
    {
     //za test da vidime dali url ti stasuva   $this->parseUrl(); //https://localhost/TheatreMvc/public/?url=%22something%22 
    $url=$this->parseUrl();
      //Array ( [0] => home [1] => index [2] => Alex )
      //https://localhost/TheatreMvc/public/home/index/Alex od ovaj url ti se dobiva ona pogore 
      $file_path='../app/controllers/'.$url[0]. '.php';
      $p=file_exists($file_path);
     //test print_r( $url);

      if($p==1)
      {
        $this->controller=$url[0];
        unset($url[0]);
      }
      require_once '../app/controllers/'. $this->controller .'.php';
        $this->controller=new $this->controller;
        if(isset($url[1]))
        {
            if(method_exists($this->controller,$url[1]))
            {
               // echo "taaman";
               
               $this->method=$url[1];
               unset($url[1]);
            }
        }
      //test  print_r($url);
      $this->params=array_values($url);
     //test print_r($this->params);
     call_user_func_array([$this->controller,$this->method],$this->params);
    }
    public function parseUrl()
    {
        //ovde sakame da gi zemime site elementi od url controller i akcija
        if(isset($_GET['url']))
        {
            return $url=explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));

        }
    }

}
?>
