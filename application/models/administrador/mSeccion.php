<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mSeccion extends CI_Model {

	public function All() {
		$query = $this->db->get('seccion');
		return $query->result();
	}

	public function insertar($data) {
        return $this->db->insert('seccion', $data);
    }

	function desactivar($var){
		$data = array('estado_seccion' => '0' );
		$this->db->where('id_seccion', $var);
		$this->db->update('seccion', $data);
	}


	function activar($var){
		$data = array('estado_seccion' => '1' );
		$this->db->where('id_seccion', $var);
		$this->db->update('seccion', $data);
	}

    public function obtener($id) {
        $query = $this->db->get_where('seccion', array('id_seccion' => $id) );
        if($query->num_rows()>0){
        	return $query->row();
        }
    }

    public function actualizar($id, $data){
		return $this->db->where('id_seccion', $id)->update('seccion', $data);    	
    }

}

?>