<?php
 
class Opiekun extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Opiekun_model');
        if(!czyZalogowany())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
        if(!czyOpiekun())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
    } 

    function index()
    {
        
        $data['_view'] = 'opiekun/index';
        $this->load->view('layouts/main',$data);
    }

    function kalendarz()
    {   
        
        $data['_view'] = 'opiekun/index';
        $this->load->view('layouts/main',$data);
        
    }

    function zajecia()
    {   
        $data['zajecia'] = $this->Opiekun_model->pobierz_zajecia(zalogowanyUzytkownik('id'));
            
        $data['_view'] = 'opiekun/zajecia';
        $this->load->view('layouts/main',$data);
        
    }
    
    function podopieczni_lista()
    {   
        $data['podopieczni'] = $this->Opiekun_model->pobierz_podopieczny(zalogowanyUzytkownik('id'));
        
        $data['_view'] = 'opiekun/podopieczni_lista';
        $this->load->view('layouts/main',$data);

    }

    function notatki()
    {   
        
        $data['_view'] = 'opiekun/notatki';
        $this->load->view('layouts/main',$data);
        
    }


    
    
}
?>