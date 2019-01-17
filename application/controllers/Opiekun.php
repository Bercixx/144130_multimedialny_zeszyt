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
    function zajecia_dodaj()
    {   
        
            $data['podopieczni'] = $this->Opiekun_model->pobierz_podopieczny(zalogowanyUzytkownik('id'));
            $id_pod=$data['podopieczni'][0]['id'];
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nazwa','Nazwa','required|max_length[255]');
            $this->form_validation->set_rules('dzien_tyg','Dzien_tyg','required');
            
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nazwa' => $this->input->post('nazwa'),
                    'dzien_tyg' => $this->input->post('dzien_tyg'),
                    'id_podopieczny' => $id_pod,
                );


                if(!empty($this->input->post('data')))
                {
                    $params['data'] = $this->input->post('data');
                }


                $this->Opiekun_model->dodaj_zajecia($params);            
                redirect('opiekun/zajecia');
            }
            else
            {
                $data['_view'] = 'zajecia/dodaj';
                $this->load->view('layouts/main',$data);
            }
        
        
    } 


    function zajecia_usun($id)
    {   
        $data['zajecia'] = $this->Opiekun_model->pobierz_zajecia(zalogowanyUzytkownik('id'));
        if(isset($data['zajecia']))
        {
            $this->Opiekun_model->usun_zajecia($id);
            redirect('opiekun/zajecia');
        }
        else
            show_error('Zajęcia, które próbowano usunąć nie istnieją.');
    }



    function zajecia_edytuj($id)
    {   
        $data['zajecia'] = $this->Opiekun_model->pobierz_zajecia(zalogowanyUzytkownik('id'));
        if(isset($data['zajecia']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nazwa','Nazwa','required|max_length[255]');
            $this->form_validation->set_rules('dzien_tyg','Dzien_tyg','required');
            
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nazwa' => $this->input->post('nazwa'),
					'dzien_tyg' => $this->input->post('dzien_tyg'),
                );


                if(!empty($this->input->post('data')))
                {
                    $params['data'] = $this->input->post('data');
                }


                $this->Opiekun_model->edytuj_zajecia($id,$params);            
                redirect('opiekun/zajecia');
            }
            else
            {
                $data['_view'] = 'zajecia/edytuj';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Zajęcia, które próbowano edytować nie istnieją.');
    } 

    
    function podopieczni()
    {   
        $data['podopieczni'] = $this->Opiekun_model->pobierz_podopieczny(zalogowanyUzytkownik('id'));
        $data['_view'] = 'opiekun/podopieczni_lista';
        $this->load->view('layouts/main',$data);

    }

    function uwagi()
    {
        $data['uwagi'] = $this->Opiekun_model->pobierz_uwagi(zalogowanyUzytkownik('id'));
        $data['_view'] = 'opiekun/uwagi';
        $this->load->view('layouts/main',$data);

    }

    function komentarz($id)
    {   
        
        $data['uwagi'] = $this->Opiekun_model->pobierz_komentarz(zalogowanyUzytkownik('id'),$id);
        
        $data['_view'] = 'opiekun/komentarz';
        $this->load->view('layouts/main',$data);
        
    }

    function uwagi_dodaj()
    {   
        $this->load->library('form_validation');
        $data['podopieczni'] = $this->Opiekun_model->pobierz_podopieczny(zalogowanyUzytkownik('id'));
        $id_pod=$data['podopieczni'][0]['id'];
        
        $this->form_validation->set_rules('tytul','Tytul','required|max_length[255]');

        if($this->form_validation->run())     
            {   
                $params = array(
					'tytul' => $this->input->post('tytul'),
                    'uwaga' => $this->input->post('tresc'),
                    'id_podopieczny' => $id_pod,
                );



                $this->Opiekun_model->dodaj_uwagi($params);            
                redirect('opiekun/uwagi');
            }
            else
            {
                $data['_view'] = 'opiekun/uwagi_dodaj';
                $this->load->view('layouts/main',$data);
            }
        
        
        
    }


    


    
    
}
?>