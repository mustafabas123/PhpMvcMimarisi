<?php


class Form extends Bilgi {
    public $deger,$veri;
    public $error=array();

    function get($key){
        $this->deger=$key;
        $this->veri=htmlspecialchars(strip_tags($_POST[$key]));
        return $this;
    }
    function bosmu(){
        if(empty($this->veri)){

            $this->error[] = $this->deger." boş olamaz";
           //parent::hata(false,"/Kayit/kayitekle");
            return $this;
            // Bilgi dosyası etkileşim
        }
        else {
            return $this ->veri;
        }
    }
}
?>