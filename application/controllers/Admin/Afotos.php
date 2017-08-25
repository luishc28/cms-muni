<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Afotos extends CI_Controller {

    public function index()
    {
        $this->load->model('administrador/mFotos');
        //$this->load->model('administrador/mSeccion');
        $data['slider'] = $this->mFotos->All();
        //$data['seccion'] = $this->mSeccion->All();
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/fotos/principal', $data);
        $this->load->view('administrador/footer_admin');
    }

    public function activar($var){
        $this->load->model('administrador/mFotos');
        $this->mFotos->activar($var);
        redirect('Admin/Afotos');
    }

    public function desactivar($var){
        $this->load->model('administrador/mFotos');
        $this->mFotos->desactivar($var);
        redirect('Admin/Afotos');
    }

    public function nuevo(){
        $this->load->model('administrador/mFotos');
        $data['tipo_fotos'] = $this->mFotos->tipo_foto_dropdown();        
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/fotos/form_fotos',['tipo_fotos' => $data['tipo_fotos']]);
        $this->load->view('administrador/footer_admin');        
    }


    public function guardar(){
         
        $this->form_validation->set_rules('txtNomFot');
        $this->form_validation->set_rules('txtUrlFot', 'url foto', 'required');
        $this->form_validation->set_rules('txtTipFot', 'tipo foto', 'required','greater_than[0]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $config['upload_path'] = './uploads/imagenes/';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);

        if ($this->form_validation->run())
        {
            if ($this->upload->do_upload('txtNomFot')) {

                $file_info = $this->upload->data();

                $data['nombre_fotos'] = $file_info['file_name'];
                $data['url_fotos'] = $this->input->post('txtUrlFot');
                $data['id_tipo'] = $this->input->post('txtTipFot');
                $data['estado_fotos'] = '1';

                $this->load->model('administrador/mFotos');

                if($this->mFotos->insertar($data) ){
                    $this->session->set_flashdata('response','Guardado correctamente ..!');
                }
                else{
                    $this->session->set_flashdata('response','Guardado fallido ..!');
                }
                return redirect('Admin/Afotos');
            }
            
        }
        else
        {
            $this->load->model('administrador/mFotos');
            $data['tipo_fotos'] = $this->mFotos->tipo_foto_dropdown();  
            $this->load->view('administrador/header_admin');
            $this->load->view('administrador/nav-left');
            $this->load->view('administrador/fotos/form_fotos',['tipo_fotos' => $data['tipo_fotos']]);
            $this->load->view('administrador/footer_admin');  
        }    
    }

    public function editar($id){
        $this->load->model('administrador/mFotos'); 
        $data['tipo_fotos'] = $this->mFotos->tipo_foto_dropdown();   
        $data['record'] = $this->mFotos->obtener($id);      
        $this->load->view('administrador/header_admin');
        $this->load->view('administrador/nav-left');
        $this->load->view('administrador/fotos/form_fotos',$data);
        $this->load->view('administrador/footer_admin');             
    }

    public function actualizar($id){
        $this->form_validation->set_rules('txtNomFot');
        $this->form_validation->set_rules('txtUrlFot', 'url foto', 'required');
        $this->form_validation->set_rules('txtTipFot', 'tipo foto', 'required','greater_than[0]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $config['upload_path'] = './uploads/imagenes/';
        $config['allowed_types'] = 'jpg|png';
        $this->load->library('upload', $config);

            if ($this->form_validation->run())
            {
                if ($this->upload->do_upload('txtNomFot')) {

                    $file_info = $this->upload->data();

                    $data['nombre_fotos'] = $file_info['file_name'];
                    $data['url_fotos'] = $this->input->post('txtUrlFot');
                    $data['id_tipo'] = $this->input->post('txtTipFot');
                    $data['estado_fotos'] = '1';

                    $this->load->model('administrador/mFotos');

                    if($this->mFotos->actualizar($id , $data) ) {
                        $this->session->set_flashdata('response','Actualizado correctamente ..!');
                    }
                    else {
                        $this->session->set_flashdata('response','Actualizado fallido ..!');
                    }
                    return redirect('Admin/Afotos');
                }
            }
            else
            {
                $this->load->view('administrador/header_admin');
                $this->load->view('administrador/nav-left');
                $this->load->view('administrador/fotos/form_fotos');
                $this->load->view('administrador/footer_admin');  
            }
    }



}