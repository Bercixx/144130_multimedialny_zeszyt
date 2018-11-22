<?php
 
class Uzytkownicy extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Uzytkownicy_model');
        if(!czyZalogowany())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
    } 

    function index()
    {
        $data['uzytkownicy'] = $this->Uzytkownicy_model->get_all_uzytkownicy();
        
        $data['_view'] = 'uzytkownicy/index';
        $this->load->view('layouts/main',$data);
    }

    function add()
    {
        if(!czyAdmin())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
        $this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email|is_unique[uzytkownicy.email]');
		$this->form_validation->set_rules('haslo','Haslo','required|max_length[255]');
		$this->form_validation->set_rules('imie','Imie','required|max_length[255]');
		$this->form_validation->set_rules('nazwisko','Nazwisko','required|max_length[255]');
		$this->form_validation->set_rules('typ','Typ','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'email' => $this->input->post('email'),
				'imie' => $this->input->post('imie'),
				'nazwisko' => $this->input->post('nazwisko'),
				'typ' => $this->input->post('typ'),
            );

            if(!empty($this->input->post('haslo')))
                {
                    $params['haslo'] = password_hash($this->input->post('haslo'), PASSWORD_DEFAULT);
                }
            
            $uzytkownik_id = $this->Uzytkownicy_model->add_uzytkownik($params);
            redirect('uzytkownicy/index');
        }
        else
        {            
            $data['_view'] = 'uzytkownicy/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id)
    {
        if(!czyAdmin())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
        $data['uzytkownik'] = $this->Uzytkownicy_model->get_uzytkownik($id);
        
        if(isset($data['uzytkownik']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('email','Email','required|max_length[255]|valid_email');
			$this->form_validation->set_rules('haslo','Haslo','max_length[255]');
			$this->form_validation->set_rules('imie','Imie','required|max_length[255]');
			$this->form_validation->set_rules('nazwisko','Nazwisko','required|max_length[255]');
			$this->form_validation->set_rules('typ','Typ','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'email' => $this->input->post('email'),
					'imie' => $this->input->post('imie'),
					'nazwisko' => $this->input->post('nazwisko'),
					'typ' => $this->input->post('typ'),
                );

                if(!empty($this->input->post('haslo')))
                {
                    $params['haslo'] = password_hash($this->input->post('haslo'), PASSWORD_DEFAULT);
                }

                $this->Uzytkownicy_model->update_uzytkownik($id,$params);            
                redirect('uzytkownicy/index');
            }
            else
            {
                $data['_view'] = 'uzytkownicy/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Użytkownik, którego próbowano edytować nie istnieje.');
    } 

    function remove($id)
    {
        if(!czyAdmin())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
        $uzytkownik = $this->Uzytkownicy_model->get_uzytkownik($id);

        if(isset($uzytkownik['id']))
        {
            $this->Uzytkownicy_model->delete_uzytkownik($id);
            redirect('uzytkownicy/index');
        }
        else
            show_error('Użytkownik, którego próbowano usunąć nie istnieje.');
    }


    
}
