<?php

class Ana extends Controller{
    function __construct()
    {
        parent::__construct();
        $this ->view->goster("index/index");    
    }
    function ilerleme(){
        $this->ModelYukle('kayit');
    }
}








?>