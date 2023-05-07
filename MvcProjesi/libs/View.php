<?php
class View{
    public function Goster($dosyaAd,$data=null,$yonlen=null){
        require 'views/'.$dosyaAd.'.php';
    }
}

?>