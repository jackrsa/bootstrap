<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CodigoFacilito extends CI_Controller {
	function __construct(){
		parent:: __construct();
		// Cargar los helpers despues de la llamada al constructor del padre en el controlador
		// luego las funciones del helper pueden ser accedidas en la vista que carga este controlador
		$this->load->helper("mihelper"); // Los nombres de los helper deben ir en minuscula mihelper_helper.php
		$this->load->helper("form"); // Cargamos un helper para generar formularios
		$this->load->model("mimodelo_model"); // Cargamos el modelo
	}

	function index() {
		// Cargamos una libreria y tambien podemos pasar parametros al constructor
		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
		// Convocamos a una funcion construirMenu() de la libreria menu y la cargamos en el arreglo a pasar a la vista
		$dato['mi_menu'] = $this->menu->construirMenu();
		// Podemos cargar multiples vistas, formando una sola pagina, por ejemplo aqui cargamos el header o encabezado
		$this->load->view('codigoFacilito/header');	
		$dato['cadena'] = 'Enviado desde function index';
		$this->load->view('codigoFacilito/bienvenido', $dato);

	}

	function holaMundo(){
		$this->load->view('codigoFacilito/header');	
		$dato['cadena'] = 'Enviado desde function holaMundo';
		$this->load->view('codigoFacilito/bienvenido', $dato);	
	}

	// Primero venimos a esta funcion del controlador
	function dataBase() {
		$this->load->view('codigoFacilito/header');	
		// desde esta vista se va a convocar a la funcion recibirDatos de este controlador.
		$this->load->view('codigoFacilito/formulario');	 
	}

	function recibirDatos() {
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
	}
}
?>