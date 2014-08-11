<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Creamos la clase del modelo
*/
class Qrmodel_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database(); // Cargamos la base de datos
	}

	function crearCurso($data) {
		$this->db->insert("Cursos", array(
			'nombreCurso' => $data['nombre'], 
			'videosCurso' => $data['video']
		));
	}

	function obtenerCursos() {
		$query = $this->db->get('Cursos');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	function obtenerCurso($id) {
		$this->db->where('idCurso',$id);
		$query = $this->db->get('Cursos');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}

	function actualizarCurso($id, $data){
		$datos = array(
			'nombreCurso' => $data['nombre'], 
			'videosCurso' => $data['video']
		);
		$this->db->where('idCurso', $id);
		$query = $this->db->update('Cursos', $datos);
	}
}