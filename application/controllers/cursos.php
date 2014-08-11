<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {
	function __construct(){
		parent:: __construct();
		// Cargar los helpers despues de la llamada al constructor del padre en el controlador
		// luego las funciones del helper pueden ser accedidas en la vista que carga este controlador
		$this->load->model('secure_bcrypt_model');
		$this->load->library(array('form_validation','session'));
	   $this->load->helper(array('url','form'));
	   $this->load->database('default');
	}

	// Se ejecuta por defecto al seleccionar la url del controlador y muestra datos de la db
	function index() {
		// $data['cursos'] = $this->mimodelo_model->obtenerCursos();

		$this->load->view("qrnetwork/header");
		// $this->load->view('qrnetwork/bootstrap', $data);
		$this->load->view("login_ok_view",$data);
		$this->load->view("qrnetwork/footer");
	}

	function registrosIndividuales() {
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('codigoFacilito/header');
		if (!$data['segmento']) {
			$data['cursos'] = $this->mimodelo_model->obtenerCursos();
		} else {
			$data['cursos'] = $this->mimodelo_model->obtenerCurso($data['segmento']);
		}

		$this->load->view('cursos/cursos', $data);
		$this->load->view('codigoFacilito/footer');
	}

	// Primero venimos a esta funcion del controlador
	function dataBase() {
		$this->load->view('codigoFacilito/header');
		// desde esta vista se va a convocar a la funcion recibirDatos de este controlador.
		$this->load->view('cursos/formulario');
		$this->load->view('codigoFacilito/footer');
	}
	// Esta funcion es convocada desde formulario
	function alta() {
		// en $data obtenemos los datos enviados desde formulario.
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'video' => $this->input->post('video')
		);
		// Enviamos los datos para que sean insertados en la db
		$this->mimodelo_model->crearCurso($data);
		// Presentamos la pantalla principal luego de haber insertados los datos en la db
		$this->load->view('codigoFacilito/header');
		$this->load->view('codigoFacilito/bienvenido2');
		$this->load->view('codigoFacilito/footer');
	}


	// Esta funcion se convoca primero y luego la siguiente funcion se convoca desde la vista editar
	function editar(){
		$data['id'] = $this->uri->segment(3);
		$data['curso'] = $this->mimodelo_model->obtenerCurso($data['id']);
		$this->load->view('codigoFacilito/header');
		$this->load->view('cursos/editar', $data);
		$this->load->view('codigoFacilito/footer');
	}

	function actualizar(){
		// en $data obtenemos los datos enviados desde formulario.
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'video'	 => $this->input->post('video')
		);
		$this->mimodelo_model->actualizarCurso($this->uri->segment(3), $data);
		$this->load->view('codigoFacilito/header');
		$this->load->view('codigoFacilito/bienvenido2');
		$this->load->view('codigoFacilito/footer');
	}
}
?>