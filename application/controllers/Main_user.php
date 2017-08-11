<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_user extends CI_Controller {


	public function index()
	{	
		$this->load->model('info_principal');
		$data['seccion'] = $this->info_principal->seccion();
		$data['categoria'] = $this->info_principal->categoria();

		$this->load->view('view_main_user',$data);
	}
}
