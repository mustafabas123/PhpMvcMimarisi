<?php 
class login_model extends Model {
    function __construct()
    {
        parent::__construct();
    }
    function girisKontrol($tabload,$kosul){
       return $this->db->GirisKontrol($tabload,$kosul);
    }
}



?>