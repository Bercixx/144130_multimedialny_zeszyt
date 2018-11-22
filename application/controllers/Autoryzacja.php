<?php

class Autoryzacja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Uzytkownicy_model');
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

    public function wyloguj()
    {
        session_destroy();
        redirect(site_url('autoryzacja/logowanie'));
    }
}