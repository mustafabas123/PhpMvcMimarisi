<?php


// Bu otomatik olrak bütün dosyaları dahil edecektir
spl_autoload_register(function($className)
{
   $dir=__DIR__.'/libs/';
   $dosyaYolu=$dir.$className.'.php';
   include($dosyaYolu);
});

require 'config/genel.php';
require 'config/database.php';
require 'libs/database.php';

$boots = new boots;


?>