<?php
 
class Uzytkownicy_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_uzytkownik($id)
    {
        return $this->db->get_where('uzytkownicy',array('id'=>$id))->row_array();
    }


    function get_uzytkownik_by_email($email)
    {
        return $this->db->get_where('uzytkownicy',array('email'=>$email))->row_array();
    }

    function get_all_uzytkownicy()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('uzytkownicy')->result_array();
    }

    function add_uzytkownik($params)
    {
        $this->db->insert('uzytkownicy',$params);
        return $this->db->insert_id();
    }

    function update_uzytkownik($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('uzytkownicy',$params);
    }

    function delete_uzytkownik($id)
    {
        return $this->db->delete('uzytkownicy',array('id'=>$id));
    }

    
}
