<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_principal extends CI_Model {

	public function seccion(){
		$query = $this->db->where('estado_seccion','1')->get('seccion');
		return $query->result();
	}


	public function categoria(){
		$query = $this->db->where('estado_categoria','1')->get('categoria');
		return $query->result();
	}

}

?>