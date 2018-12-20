<?php
 
class Opiekun_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function pobierz_podopieczny($opiekun_id)
    {
        $this->db->select('podopieczni.*');
       // $this->db->select('uzytkownicy.email','uzytkownicy.id','uzytkownicy.imie','uzytkownicy.nazwisko');
       
        $this->db->where('podopieczni.id_opiekun',$opiekun_id);
   

        return $this->db->get('podopieczni')->result_array();

    }






}