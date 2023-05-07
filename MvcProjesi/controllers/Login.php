<?php 
class Login extends Controller{
    function __construct()
    {
        parent::__construct();
        $this ->ModelYukle('login');
    }
    function Form(){

        $this ->view->goster("Form/giris");

    }
    function GirisKontrol()
    {
        $ad=$this -> form-> get("ad")->bosmu();
        $sifre=$this -> form -> get("sifre")->bosmu();

        if(!empty($this->form->error)){
            // Hata var demek
            $this->view->goster("Form/sonuc",$this->form->error,$this->bilgi->hata(false,"/Login/Form"));
        }
        else {

            $sonuc=$this -> model -> girisKontrol("panel"," ad = '$ad' and sifre = '$sifre' ");
            if($sonuc == 1){
                header("Location:".URL."/Panel");
            }
            else {
               $this-> view ->goster("Form/sonuc",$this -> form -> error, $this-> bilgi->hata("Eşleşme yok","/Login/Form")); 
            }
             
        }
    }

}



?>