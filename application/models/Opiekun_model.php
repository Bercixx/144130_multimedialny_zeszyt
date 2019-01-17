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

    function pobierz_zajecia($id)
    {

        $this->db->select('zajecia.*');
        $this->db->join('podopieczni','podopieczni.id=zajecia.id_podopieczny','inner');
        $this->db->where('podopieczni.id_opiekun',$id);
     

        return $this->db->get('zajecia')->result_array();

    }

    function dodaj_zajecia($params)
    {
        return $this->db->insert('zajecia',$params);
    }

    function edytuj_zajecia($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('zajecia',$params);
    }

    function usun_zajecia($id)
    {
        return $this->db->delete('zajecia',array('id'=>$id));
    }

    function pobierz_uwagi($id)
    {
        $this->db->select('uwagi.*');
        $this->db->join('podopieczni','podopieczni.id=uwagi.id_podopieczny','inner');
        $this->db->where('podopieczni.id_opiekun',$id);
        // echo  $this->db->get_compiled_select('uwagi');
        return $this->db->get('uwagi')->result_array(); 
         
    }

    function pobierz_komentarz($id,$kod)
    {
        $this->db->select('uwagi.*');
        $this->db->join('podopieczni','podopieczni.id=uwagi.id_podopieczny','inner');
        $this->db->where('podopieczni.id_opiekun',$id);
        $this->db->where('uwagi.id',$kod);

        // echo  $this->db->get_compiled_select('uwagi');
        return $this->db->get('uwagi')->row_array(); 
         
    }

    function dodaj_uwagi($params)
    {
        return $this->db->insert('uwagi',$params);
    }






}