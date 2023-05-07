<?php 
class kayit_model extends Model {
    function __construct()
    {
        parent::__construct();
    }

    function kontrolet($tabloAd,$sutunAdlari,$veri)
    {
        return $this -> db -> Ekle($tabloAd,$sutunAdlari,$veri);
    }
    function listeleme($tabloadi,$kosul){
        return $this -> db ->listele($tabloadi,$kosul);
    }
    function silme($tabloadi,$kosul){
        return $this -> db ->sil($tabloadi,$kosul);
    }
    function guncelle($tabloadi,$sutunlar,$veri,$kosul)
    {
        return $this -> db ->guncelle($tabloadi,$sutunlar,$veri,$kosul);
    }
    function arama($tabloadi,$kosul){
        return $this -> db ->Arama($tabloadi,$kosul);
    }
    
}



?>