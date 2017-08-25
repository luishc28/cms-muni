<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mFotos extends CI_Model {

	public function All() {
		$this->db->select('fotos.*,tipo_fotos.id_tipo,tipo_fotos.nombre_tipo');
		$this->db->from('fotos');
		$this->db->join('tipo_fotos', 'fotos.id_tipo = tipo_fotos.id_tipo');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertar($data) {
        return $this->db->insert('fotos', $data);
    }    

	function desactivar($var){
		$data = array('estado_fotos' => '0' );
		$this->db->where('id_fotos', $var);
		$this->db->update('fotos', $data);
	}


	function activar($var){
		$data = array('estado_fotos' => '1' );
		$this->db->where('id_fotos', $var);
		$this->db->update('fotos', $data);
	}

    public function obtener($id) {
        $query = $this->db->get_where('fotos', array('id_fotos' => $id) );
        if($query->num_rows()>0){
        	return $query->row();
        }
    }

    public function actualizar($id, $data){
		return $this->db->where('id_fotos', $id)->update('fotos', $data);    	
    }

    public function tipo_foto_dropdown(){
	    $this->db->from('tipo_fotos');
	    $this->db->where('estado_tipo','1');
	    $this->db->order_by('id_tipo');
	    $result = $this->db->get();
	    $return = array();
	    if($result->num_rows() > 0){
	        foreach($result->result_array() as $row){
	        	$return[''] = 'Seleccione una Sección';
	            $return[$row['id_tipo']] = $row['nombre_tipo'];
	        }
	    }
	    return $return;
	}    

}

?>