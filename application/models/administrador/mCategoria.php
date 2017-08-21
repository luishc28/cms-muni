<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mCategoria extends CI_Model {

	public function All() {
		$this->db->select('categoria.*,seccion.id_seccion,seccion.nombre_seccion');
		$this->db->from('categoria');
		$this->db->join('seccion', 'categoria.id_seccion = seccion.id_seccion');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertar($data) {
        return $this->db->insert('categoria', $data);
    }    

	function desactivar($var){
		$data = array('estado_categoria' => '0' );
		$this->db->where('id_categoria', $var);
		$this->db->update('categoria', $data);
	}


	function activar($var){
		$data = array('estado_categoria' => '1' );
		$this->db->where('id_categoria', $var);
		$this->db->update('categoria', $data);
	}

    public function obtener($id) {
        $query = $this->db->get_where('categoria', array('id_categoria' => $id) );
        if($query->num_rows()>0){
        	return $query->row();
        }
    }

    public function actualizar($id, $data){
		return $this->db->where('id_categoria', $id)->update('categoria', $data);    	
    }

    public function seccion_dropdown(){
	    $this->db->from('seccion');
	    $this->db->where('estado_seccion','1');
	    $this->db->order_by('id_seccion');
	    $result = $this->db->get();
	    $return = array();
	    if($result->num_rows() > 0){
	        foreach($result->result_array() as $row){
	        	$return[''] = 'Seleccione una Sección';
	            $return[$row['id_seccion']] = $row['nombre_seccion'];
	        }
	    }
	    return $return;
	}    

}

?>