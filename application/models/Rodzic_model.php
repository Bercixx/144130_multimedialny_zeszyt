<?php
 
class Rodzic_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function pobierz_lekarstwa($rodzic_id)
    {
         
        //return $this->db->get_where('lekarstwa',array('id'=>$rodzic_id))->result_array();
        


      
        $this->db->select('lekarstwa.*');
      
        $this->db->join('podopieczni','podopieczni.id=lekarstwa.id_podopieczny','inner');
        
        $this->db->where('podopieczni.id_rodzic',$rodzic_id);

        // $this->db->where('podopieczni.id_rodzic',$rodzic_id);
    
        //echo $this->db->get_compiled_select('lekarstwa'); 
 
        return $this->db->get('lekarstwa')->result_array();

    }

    function pobierz_id_dziecka($id)
    {
        $this->db->select('podopieczni.id'); 
        $this->db->where('id_rodzic',$id);
        return $this->db->get('podopieczni')->result_array();
    }



    function pobierz_zajecia($rodzic_id)
    {

        $this->db->select('zajecia.*');
        $this->db->join('podopieczni','podopieczni.id=zajecia.id_podopieczny','inner');
        $this->db->where('podopieczni.id_rodzic',$rodzic_id);
     

        return $this->db->get('zajecia')->result_array();

    }

    function pobierz_dziecko($rodzic_id)
    {
        return $this->db
            ->where("id_rodzic", $rodzic_id)
            ->get("podopieczni")->result_array();
    }

    function pobierz_uwagi($id)
    {
        $this->db->select('uwagi.*');
        $this->db->join('podopieczni','podopieczni.id=uwagi.id_podopieczny','inner');
        $this->db->where('podopieczni.id_rodzic',$id);
        // echo  $this->db->get_compiled_select('uwagi');
        return $this->db->get('uwagi')->result_array(); 
         
    }

    function pobierz_komentarz($id,$kod)
    {
        $this->db->select('uwagi.*');
        $this->db->join('podopieczni','podopieczni.id=uwagi.id_podopieczny','inner');
        $this->db->where('podopieczni.id_rodzic',$id);
        $this->db->where('uwagi.id',$kod);

        // echo  $this->db->get_compiled_select('uwagi');
        return $this->db->get('uwagi')->row_array(); 
         
    }

    function dodaj_komentarz($params,$id)
    {
        $this->db->set('koment', $params);
        $this->db->where('id', $id);
        $this->db->update('uwagi');

    }



    function pobierz_opiekuna($rodzic_id)
    {
        $this->db->select('uzytkownicy.*');
       // $this->db->select('uzytkownicy.email','uzytkownicy.id','uzytkownicy.imie','uzytkownicy.nazwisko');
       
     
        $this->db->join('opiekun','opiekun.id_opiekun=uzytkownicy.id','inner');
        $this->db->join('podopieczni','podopieczni.id=opiekun.id_podopieczny','inner');
        $this->db->where('podopieczni.id_rodzic',$rodzic_id);
   

        return $this->db->get('uzytkownicy')->result_array();

    }

    function pobierz_lista_opiekunow()
    {
        $this->db->where('typ','opiekun');
   

        return $this->db->get('uzytkownicy')->result_array();

    }


    function dodaj_lekarstwo($params)
    {
        $this->db->insert('lekarstwa',$params);
        return $this->db->insert_id();
    }

    function leki_ed($id)
    {
        return $this->db->get_where('lekarstwa',array('id'=>$id))->row_array();
    }

    function edytuj_lekarstwo($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('lekarstwa',$params);
    }

    function usun_lekarstwo($id)
    {
        return $this->db->delete('lekarstwa',array('id'=>$id));
    }


    function dodaj_dziecko($params)
    {
        $this->db->insert('podopieczni',$params);
        return $this->db->insert_id();
    }

}

  