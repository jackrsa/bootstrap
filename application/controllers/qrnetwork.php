<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qrnetwork extends CI_Controller {
	function __construct(){
		parent:: __construct();
		// Cargar los helpers despues de la llamada al constructor del padre en el controlador
		// luego las funciones del helper pueden ser accedidas en la vista que carga este controlador
		$this->load->model('secure_bcrypt_model');
		$this->load->library(array('form_validation','session'));
	   $this->load->helper(array('url','form'));
	   $this->load->database('default');
	}

	//cargamos el formulario de registro
	public function index()	{
		$data['titulo'] = 'Asegurar los passwords en codeigniter con Bcrypt';
		$data['token'] = $this->token();
		// $this->load->view('secure_bcrypt_view',$data);
		// $this->load->view("qrnetwork/header");
		$this->load->view("sidebar2", $data);
		// $this->load->view("qrnetwork/footer");
	}

	//creamos la clave aleatoria para agregar seguridad a nuestro formulario
	public function token()	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	//Cargamos el formulario de login
	function login(){
		$data['titulo'] = 'Login seguro en codeigniter con Bcrypt';
	   $data['token'] = $this->token();
	   $this->load->view("qrnetwork/header");
		$this->load->view("qrnetwork/signin", $data);
		$this->load->view("qrnetwork/footer");
	}

	//cargamos la vista confirmando los datos del usuario una vez logueado
	public function login_ok(){
		$data['titulo'] = 'Login correcto con Bcrypt en codeigniter';
		$this->load->view("qrnetwork/header");
		$this->load->view('login_ok_view',$data);
		$this->load->view("qrnetwork/footer");
	}

	//procesamos los datos del formulario de login_view.php
	public function secure_login(){
		//si existe la clave token oculta en el formulario y es igual
		// que la generada con el método token dejamos pasar
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))	{
			$this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|max_length[150]|xss_clean');
			$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');

			//lanzamos mensajes de error si es que los hay
			$this->form_validation->set_message('required', 'El campo es requerido');
			$this->form_validation->set_message('min_length', 'El campo debe tener al menos 6 carácteres');
			$this->form_validation->set_message('max_length', 'El campo no puede tener más de 150 carácteres');

			//si el proceso falla mostramos errores
			if($this->form_validation->run() == FALSE){
				$this->login();
				//en otro caso procesamos los datos
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$login = $this->secure_bcrypt_model->login($username,$password);

				//si existe el usuario hacemos login y creamos sesiones
				if($login) {
					$data = array(
					    'is_logued_in'=>    TRUE,
					    'username'    =>    $login->username,
					    'password'    =>    $login->password,

					    'id_usuario'  =>    $login->id,
					    'perfil'      =>    $login->perfil
					);
					$this->session->set_userdata($data);
					$this->login_ok();
				}
			}
		}
	}

	//cerramos sesión
	public function logout() {
		$this->session->sess_destroy();
		//redirect(base_url().'secure_bcrypt');
		redirect('qrnetwork');
	}

}
?>
