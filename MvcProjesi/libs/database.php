<?php

class Database extends PDO{

     protected $Dize = array();
     protected $Dize2 = array();

     function __construct()
     {
       //parent::__construct('mysql:host=localhost;dbname=mvcproje;','root','');
        parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER,DB_PASS);
        $this->bilgi=new Bilgi();
     }
     
     // Ekleme 
    function Ekle($tabloAdi,$sutunAdlari,$veriler){
      $sutunSayisi=count($sutunAdlari);
      for($i=0;$i<$sutunSayisi;$i++){
        $this->Dize[]='?';
      }
      // ?,?,?,
      $sonValue=join(",",$this->Dize);
      // ?,?,?

      $sonHal=join(",",$sutunAdlari);

      $sorgu=$this->prepare('INSERT INTO  '.$tabloAdi.' ('.$sonHal.') VALUES('.$sonValue.')');
      
      if($sorgu->execute($veriler)){
          return $this->bilgi->basarili("Kayıt başarılı bir şekilde ekledi",URL."/Kayit/kayitekle");
      }
      else {
        return $this->bilgi->hata("Kayıt işlemi gercekleşmedi ",URL."/Kayit/kayitekle");
      }

     }


     function listele($tabloismi,$kosul=false)
     {
      if($kosul == false){
        $sorgum = "select * from ".$tabloismi;
      } 
      else{
        $sorgum= "select * from ".$tabloismi." ".$kosul;
      }

      $son=$this->prepare($sorgum);
      $son->execute();

      return $son->fetchAll();
     }

     function sil($tabloAdi,$kosul){

      $sorgum=$this->prepare("delete from ".$tabloAdi." where ".$kosul);
      if($sorgum->execute()){

        return $this->bilgi->basarili("Kayıt başarılı bir şekilde Silindi",URL."/Kayit/listele");

      }
      else {

        return $this->bilgi->hata("Kayıt başarılı bir şekilde silinemedi ",URL."/Kayit/listele");
      }
     }

     function guncelle($tabloAdi,$sutunlar,$veriler,$kosul){

      foreach($sutunlar as $deger){
        $this->Dize2[] =$deger."=?";
      }

      $sonSutunlar=join(",",$this->Dize2);
      $sorgum=$this->prepare("update ".$tabloAdi." set ".$sonSutunlar."  where ".$kosul);



      if($sorgum->execute($veriler)){
        return $this->bilgi->basarili("Kayıt başarılı bir şekilde güncellendi",URL."/Kayit/listele");
      }
      else {
        return $this->bilgi->hata("Kayıt başarılı bir şekilde güncellenmedi :(",URL."/Kayit/listele");
      }
     }

     function Arama($tabloismi,$kosul){

      $sorgum = "select * from ".$tabloismi." where ".$kosul;
      $son=$this->prepare($sorgum);
      $son->execute();
      return $son->fetchAll();
      // select * from TabloAdi where ad like a% 
     }
     function GirisKontrol($tabloadi,$kosul)
     {
      $sorgum="SELECT * FROM ".$tabloadi." where ".$kosul;
      $son=$this ->prepare($sorgum);
      $son -> execute();
      if($son->rowCount()>0)  
      {
        Session::init(); 
        Session::set("kulad",true); 
      }
      return $son ->rowCount();
     }

     
}

?>