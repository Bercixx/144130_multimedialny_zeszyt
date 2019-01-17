<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!czyZalogowany())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
    }

    function index()
    {
        
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
