<?php 

class Panel extends Controller{
    function __construct()
    {
        parent::__construct(); 
        Session::init();
        if(Session::get("kulad") == false)  
        {
            Session::destroy(); // Bir problem var demektir
            header("Location:".URL."/Login/Form");   
            exit;
        }
        else {
            $this -> view ->goster("Panel/index");
        }
    }
    function Cikis(){
        Session::destroy();
        header("Location:".URL."/Login/Form"); 
    }
}





?>