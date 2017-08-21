<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aseccion extends CI_Controller {

	public function index()
	{
	$this->load->model('administrador/mSeccion');
	$data['seccion'] = $this->mSeccion->All();
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
	$this->load->view('administrador/seccion/principal', $data);
    $this->load->view('administrador/footer_admin');
	}

    public function activar($var){
        $this->load->model('administrador/mSeccion');
        $this->mSeccion->activar($var);
        redirect('Admin/Aseccion');
    }

    public function desactivar($var){
        $this->load->model('administrador/mSeccion');
        $this->mSeccion->desactivar($var);
        redirect('Admin/Aseccion');
    }    

    public function nuevo(){
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
    $this->load->view('administrador/seccion/form_seccion');
    $this->load->view('administrador/footer_admin');        
    }

	public function guardar(){
        $this->form_validation->set_rules('txtNomSec', 'nombre sección', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run())
        {
            $data['nombre_seccion'] = $this->input->post('txtNomSec');
            $data['estado_seccion'] = '1';
            $this->load->model('administrador/mSeccion');
            if($this->mSeccion->insertar($data) ){
                $this->session->set_flashdata('response','Guardado correctamente ..!');
            }
            else{
                $this->session->set_flashdata('response','Guardado fallido ..!');
            }
            return redirect('Admin/Aseccion');
        }
        else
        {
            $this->load->view('administrador/header_admin');
            $this->load->view('administrador/nav-left');
            $this->load->view('administrador/seccion/form_seccion');
            $this->load->view('administrador/footer_admin');  
        }    
    }

    public function editar($id){
        $this->load->model('administrador/mSeccion'); 
        $record = $this->mSeccion->obtener($id);      
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/seccion/form_seccion',['record' => $record]);
        $this->load->view('administrador/footer_admin');             
    }

    public function actualizar($id){
            $this->form_validation->set_rules('txtNomSec', 'nombre sección', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            if ($this->form_validation->run())
            {
                $data['nombre_seccion'] = $this->input->post('txtNomSec');
                $data['estado_seccion'] = '1';
                $this->load->model('administrador/mSeccion');
                if($this->mSeccion->actualizar($id , $data) ){
                    $this->session->set_flashdata('response','Actualizado correctamente ..!');
                }
                else{
                    $this->session->set_flashdata('response','Actualizado fallido ..!');
                }
                return redirect('Admin/Aseccion');
            }
            else
            {
                $this->load->view('administrador/header_admin');
                $this->load->view('administrador/nav-left');
                $this->load->view('administrador/seccion/form_seccion');
                $this->load->view('administrador/footer_admin');  
            }
    }


    
}
