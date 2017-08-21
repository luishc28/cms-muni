<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asociales extends CI_Controller {

	public function index()
	{
	$this->load->model('administrador/mSocial');
	$data['social'] = $this->mSocial->All();
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
	$this->load->view('administrador/sociales/principal', $data);
    $this->load->view('administrador/footer_admin');
	}

    public function activar($var){
        $this->load->model('administrador/mSocial');
        $this->mSocial->activar($var);
        redirect('Admin/Asociales');
    }

    public function desactivar($var){
        $this->load->model('administrador/mSocial');
        $this->mSocial->desactivar($var);
        redirect('Admin/Asociales');
    }    

    public function nuevo(){     
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
    $this->load->view('administrador/sociales/form_social');
    $this->load->view('administrador/footer_admin');        
    }

	public function guardar(){
        $this->form_validation->set_rules('txtNomSoc', 'nombre red social', 'required');
        $this->form_validation->set_rules('txtNomDir', 'direccion', 'required','');        
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run())
        {
            $data['nombre_social'] = $this->input->post('txtNomSoc');
            $data['direc_social'] = $this->input->post('txtNomDir');
            $data['estado_social'] = '1';
            $this->load->model('administrador/mSocial');
            if($this->mSocial->insertar($data) ){
                $this->session->set_flashdata('response','Guardado correctamente ..!');
            }
            else{
                $this->session->set_flashdata('response','Guardado fallido ..!');
            }
            return redirect('Admin/Asociales');
        }
        else
        {  
            $this->load->view('administrador/header_admin');
            $this->load->view('administrador/nav-left');
            $this->load->view('administrador/sociales/form_social');
            $this->load->view('administrador/footer_admin');  
        }    
    }

    public function editar($id){
        $this->load->model('administrador/mSocial'); 
        $data['record'] = $this->mSocial->obtener($id);     
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/sociales/form_social',$data);
        $this->load->view('administrador/footer_admin');             
    }

    public function actualizar($id){
            $this->form_validation->set_rules('txtNomSoc', 'nombre red social', 'required');
            $this->form_validation->set_rules('txtNomDir', 'clase color', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            if ($this->form_validation->run())
            {
                $data['nombre_social'] = $this->input->post('txtNomSoc');
                $data['direc_social'] = $this->input->post('txtNomDir');
                $data['estado_social'] = '1';
                $this->load->model('administrador/mSocial');
                if($this->mSocial->actualizar($id , $data) ){
                    $this->session->set_flashdata('response','Actualizado correctamente ..!');
                }
                else{
                    $this->session->set_flashdata('response','Actualizado fallido ..!');
                }
                return redirect('Admin/Asociales');
            }
            else
            {
                $this->load->view('administrador/header_admin');
                $this->load->view('administrador/nav-left');
                $this->load->view('administrador/sociales/form_social');
                $this->load->view('administrador/footer_admin');  
            }
    }


    
}
