<?php
 
class Rodzic extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rodzic_model');
        if(!czyZalogowany())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
        if(!czyRodzic())
        {
            redirect(site_url('autoryzacja/logowanie'));
        }
    } 

    function index()
    {
        
        $data['_view'] = 'rodzic/index';
        $this->load->view('layouts/main',$data);
    }

    function kalendarz()
    {   
        
        $data['_view'] = 'rodzic/kalendarz';
        $this->load->view('layouts/main',$data);
        
    }  
    
    function lekarstwa_lista()
    {   
        $data['lekarstwa'] = $this->Rodzic_model->pobierz_lekarstwa(zalogowanyUzytkownik('id'));
            
        $data['_view'] = 'rodzic/lekarstwa_lista';
        $this->load->view('layouts/main',$data);
        
    }  
    


    function lekarstwa_dodaj()
    {
       
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nazwa','Nazwa','required|max_length[255]');
        $this->form_validation->set_rules('dawkowanie','Dawkowanie','required|max_length[255]');
        $this->form_validation->set_rules('zalecenia','Zalecenia','max_length[255]');

        if($this->form_validation->run())     
            {   
                $params = array(
                        'nazwa' => $this->input->post('nazwa'),
                        'dawkowanie' => $this->input->post('dawkowanie'),
                        'zalecenia' => $this->input->post('zalecenia'),
                        'id_podopieczny' => 1,
                );

                $this->Rodzic_model->dodaj_lekarstwo($params);            
                redirect('rodzic/lekarstwa_lista');
            }
            else
            {
                $data['_view'] = 'rodzic/lekarstwa_dodaj';
                $this->load->view('layouts/main',$data);
            }
        
    } 

    function lekarstwa_edytuj($id)
    {
        $data['leki'] = $this->Rodzic_model->leki_ed($id);
        
        if(isset($data['leki']['id']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nazwa','Nazwa','required|max_length[255]');
            $this->form_validation->set_rules('dawkowanie','Dawkowanie','required|max_length[255]');
            $this->form_validation->set_rules('zalecenia','Zalecenia','max_length[255]');
        
            if($this->form_validation->run())     
            {   
                $params = array(
                        'nazwa' => $this->input->post('nazwa'),
                        'dawkowanie' => $this->input->post('dawkowanie'),
                        'zalecenia' => $this->input->post('zalecenia'),
                );

                $this->Rodzic_model->edytuj_lekarstwo($id,$params);            
                redirect('rodzic/lekarstwa_lista');
            }
            else
            {
                $data['_view'] = 'lekarstwa/edytuj';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Podane lekarstwo nie istnieje.');
    } 

    function lekarstwa_usun($id)
    {
        
        $data['leki'] = $this->Rodzic_model->leki_ed($id);

        if(isset($data['leki']['id']))
        {
            $this->Rodzic_model->usun_lekarstwo($id);
            redirect('rodzic/lekarstwa_lista');
        }
        else
            show_error('Podane lekarstwo nie istnieje.');
    }

    function zajecia()
    {   
        $data['zajecia'] = $this->Rodzic_model->pobierz_zajecia(zalogowanyUzytkownik('id'));
            
        $data['_view'] = 'rodzic/zajecia';
        $this->load->view('layouts/main',$data);
        
    }  



    function opiekunowie_lista()
    {   
        $data['opiekun'] = $this->Rodzic_model->pobierz_opiekuna(zalogowanyUzytkownik('id'));
        
        $data['_view'] = 'rodzic/opiekunowie_lista';
        $this->load->view('layouts/main',$data);

    }

    function opiekunowie_email()
    {   
        
        $data['_view'] = 'rodzic/opiekunowie_email';
        $this->load->view('layouts/main',$data);

    }

    function uwagi()
    {   
        
        $data['_view'] = 'rodzic/uwagi';
        $this->load->view('layouts/main',$data);
        
    }


    
    
}
?>