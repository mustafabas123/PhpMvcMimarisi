<?php
class Controller {
    function __construct()
    {
        // echo 'Ana kontrolcu Çağırıldı <br>';
        $this-> view =new View();
        $this->form =new Form();
        $this -> bilgi = new Bilgi();
    }

    // İhiyaçımız olan modeli dahil ediyoruz
    public function ModelYukle($name){
        $yol='models/'.$name.'_model.php';
        if(file_exists($yol))
        {
            require $yol;
            $modelSinifName=$name.'_model';
            $this->model=new $modelSinifName();
        }
    }
}





?>