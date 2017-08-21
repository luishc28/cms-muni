<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acategoria extends CI_Controller {

    public function index()
    {
    $this->load->model('administrador/mCategoria');
    $this->load->model('administrador/mSeccion');
    $data['categoria'] = $this->mCategoria->All();
    $data['seccion'] = $this->mSeccion->All();
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
    $this->load->view('administrador/categoria/principal', $data);
    $this->load->view('administrador/footer_admin');
    }

    public function activar($var){
        $this->load->model('administrador/mCategoria');
        $this->mCategoria->activar($var);
        redirect('Admin/Acategoria');
    }

    public function desactivar($var){
        $this->load->model('administrador/mCategoria');
        $this->mCategoria->desactivar($var);
        redirect('Admin/Acategoria');
    }    

    public function nuevo(){
    $this->load->model('administrador/mCategoria');
    $data['seccion'] = $this->mCategoria->seccion_dropdown();        
    $this->load->view('administrador/header_admin');
    $this->load->view('administrador/nav-left');
    $this->load->view('administrador/categoria/form_categoria',['seccion' => $data['seccion']]);
    $this->load->view('administrador/footer_admin');        
    }

    public function guardar(){
         
        $this->form_validation->set_rules('txtNomCat', 'nombre categoria', 'required');
        $this->form_validation->set_rules('txtNomSec', 'sección', 'required','greater_than[0]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run())
        {
            $data['nombre_categoria'] = $this->input->post('txtNomCat');
            $data['id_seccion'] = $this->input->post('txtNomSec');
            $data['estado_categoria'] = '1';

            $this->load->model('administrador/mCategoria');
            if($this->mCategoria->insertar($data) ){
                $this->session->set_flashdata('response','Guardado correctamente ..!');
            }
            else{
                $this->session->set_flashdata('response','Guardado fallido ..!');
            }
            return redirect('Admin/Acategoria');
        }
        else
        {
            $this->load->model('administrador/mCategoria');
            $data['seccion'] = $this->mCategoria->seccion_dropdown();  
            $this->load->view('administrador/header_admin');
            $this->load->view('administrador/nav-left');
            $this->load->view('administrador/categoria/form_categoria',['seccion' => $data['seccion']]);
            $this->load->view('administrador/footer_admin');  
        }    
    }

    public function editar($id){
        $this->load->model('administrador/mCategoria'); 
        $data['seccion'] = $this->mCategoria->seccion_dropdown();   
        $data['record'] = $this->mCategoria->obtener($id);      
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/categoria/form_categoria',$data);
        $this->load->view('administrador/footer_admin');             
    }

    public function actualizar($id){
        $this->form_validation->set_rules('txtNomCat', 'nombre categoria', 'required');
        $this->form_validation->set_rules('txtNomSec', 'sección', 'required','greater_than[0]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            if ($this->form_validation->run())
            {
                $data['nombre_categoria'] = $this->input->post('txtNomCat');
                $data['id_seccion'] = $this->input->post('txtNomSec');
                $data['estado_categoria'] = '1';
                $this->load->model('administrador/mCategoria');
                if($this->mCategoria->actualizar($id , $data) ){
                    $this->session->set_flashdata('response','Actualizado correctamente ..!');
                }
                else{
                    $this->session->set_flashdata('response','Actualizado fallido ..!');
                }
                return redirect('Admin/Acategoria');
            }
            else
            {
                $this->load->view('administrador/header_admin');
                $this->load->view('administrador/nav-left');
                $this->load->view('administrador/categoria/form_categoria');
                $this->load->view('administrador/footer_admin');  
            }
    }

    
}

