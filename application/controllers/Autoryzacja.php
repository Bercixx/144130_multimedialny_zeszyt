<?php

class Autoryzacja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uzytkownicy_model');
        $this->load->library('form_validation');
    }

    public function logowanie()
    {
        if($this->input->method()=='post')
        {
            $uzytkownik = $this->Uzytkownicy_model->get_uzytkownik_by_email($this->input->post('email'));

            if(isset($uzytkownik['id']) && ($this->input->post('haslo')))
            {
                $_SESSION['zalogowany'] = true;
                $_SESSION['user_id'] = $uzytkownik['id'];
                redirect(site_url());
            }
        }

        $this->load->view('layouts/login');
    }

    public function rejestrowanie()
    {
        if($this->input->method()=='post')
        {
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
                redirect('autoryzacja/logowanie');
            }
            else
            {            
                echo "Podane dane są nieprawidłowe";
            }
        }

        $this->load->view('layouts/rejestracja');
    }

    public function wyloguj()
    {
        session_destroy();
        redirect(site_url('autoryzacja/logowanie'));
    }
}