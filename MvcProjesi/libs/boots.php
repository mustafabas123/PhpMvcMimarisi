<?php 
class boots{
    function __construct()
    {
            $url=isset($_GET["url"]) ? $_GET["url"]:null;
            $url=trim($url,'/');

            $url=explode('/',$url);
            // print_r($url);

            /*
            $url[0]; // Kontroller
            $url[1]; // Fonksiyon
            $url[2]; // Parametre
            */

            // Eğer kontrolcü yazılmaz ise varsayılan olarak ana kontrolcu çalışıyor
            if(empty($url[0])){ 
                require 'controllers/Ana.php';
                $controller=new Ana();
            }
            else {
                $file = 'controllers/'.$url[0].'.php'; 
                if(file_exists($file)){
                    require $file;
                    $controller=new $url[0];
                }
                else{
    
                    require 'controllers/hata.php';
                    $hata = new hata;
                    
                }
            }




            //require 'controllers/'.$url[0].'.php'; // Kontrollcüyü çalıştırıyoruz



            if(isset($url[2])){
                $controller ->{$url[1]}($url[2]);
            }
            else{
                if(isset($url[1])){
                    $controller->{$url[1]}();
                    // Eğer parametre 2 dolu ise kontrollürün içindeki fonksiyonu çağır getir
                }
            }
    }
}

?>
