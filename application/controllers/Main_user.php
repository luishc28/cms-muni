<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_user extends CI_Controller {


	public function index()
	{	
		$this->load->model('info_principal');
		$data['seccion'] = $this->info_principal->seccion();
		$data['categoria'] = $this->info_principal->categoria();
		$data['slider'] = $this->info_principal->slider();
		$data['thumb_horizontal'] = $this->info_principal->thumbnail_horizontal();
		$data['thumb_vertical'] = $this->info_principal->thumbnail_vertical();
		$data['alcalde'] = $this->info_principal->alcalde();
		$data['social'] = $this->info_principal->social();
		$data['icon'] = $this->info_principal->icon_contact();

		$this->load->view('view_main_user',$data);
	}
}
