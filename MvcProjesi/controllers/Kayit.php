<?php
class Kayit extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->ModelYukle('kayit');
    }
    function kayitekle(){
        $this->view->goster("Form/index");
    }
    function kontrol(){

        // Veri tabanı işlemi
        
        $ad=$this->form->get("ad")->bosmu();
        $soyad=$this->form->get("soyad")->bosmu();
        $yas=$this->form->get("yas")->bosmu();

        if(!empty($this->form->error)){
            // Hata var demek
            $this->view->goster("form/sonuc",$this->form->error);
        }
        else {
            $sonuc = $this-> model->kontrolet( "ogrenci" ,array("ad","soyad","yas"),array($ad,$soyad,$yas));
            $this-> view-> goster("form/sonuc",$sonuc); // gelen sonucu views altındaki formsun altındaki sonuc sayfasına yolla
        }


    }
    function listele(){

        $sonuc=$this->model->listeleme("ogrenci","order by id asc");
        $this->view->goster("Form/listele",$sonuc);
    }
    function kayitsil($id){
        $sonuc=$this ->model->silme("ogrenci","id=".$id);
        $this->view->goster("Form/sonuc",$sonuc);
    }
    function kayitguncelle($id){
        $sonuc=$this ->model->listeleme("ogrenci"," where id=".$id);
        $this ->view ->goster("Form/guncelle",$sonuc);
    }
    function guncelle(){

        $id=$this->form->get("Id")->bosmu();
        $ad=$this->form->get("ad")->bosmu();
        $soyad=$this->form->get("soyad")->bosmu();
        $yas=$this->form->get("yas")->bosmu();

        if(!empty($this->form->error)){
            // Hata var demek
            $this->view->goster("Form/sonuc",$this->form->error,$this ->bilgi ->hata(false,"/Kayit/kayitekle"));
        }
        else {
            $sonuc = $this-> model->guncelle( "ogrenci" ,array("ad","soyad","yas"),array($ad,$soyad,$yas),"id =".$id);
            $this-> view-> goster("Form/sonuc",$sonuc); // gelen sonucu views altındaki formsun altındaki sonuc sayfasına yolla
        }
    }
    function Arama(){

        $kelime=$this->form->get("kelime")->bosmu();

        if(!empty($this->form->error)){
            // Hata var demek
            $this->view->goster("Form/sonuc",$this->form->error);
        }
        else {
            $sonuc=$this->model ->arama("ogrenci","ad LIKE '%".$kelime."%' or soyad LIKE '%".$kelime."%'  ");
            $this-> view ->goster("Form/listele",$sonuc);
        }



    }
}







?>