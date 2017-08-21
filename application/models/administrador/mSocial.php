<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mSocial extends CI_Model {

	public function All() {
		$query = $this->db->get('sociales');
		return $query->result();
	}

	public function insertar($data) {
        return $this->db->insert('sociales', $data);
    }

	function desactivar($var){
		$data = array('estado_social' => '0' );
		$this->db->where('id_social', $var);
		$this->db->update('sociales', $data);
	}


	function activar($var){
		$data = array('estado_social' => '1' );
		$this->db->where('id_social', $var);
		$this->db->update('sociales', $data);
	}

    public function obtener($id) {
        $query = $this->db->get_where('sociales', array('id_social' => $id) );
        if($query->num_rows()>0){
        	return $query->row();
        }
    }

    public function actualizar($id, $data){
		return $this->db->where('id_social', $id)->update('sociales', $data);    	

	}

}

?>