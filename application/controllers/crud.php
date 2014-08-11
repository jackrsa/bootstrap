<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Heredamos de la clase CI_Controller */
class Crud extends CI_Controller {

  function __construct(){
    parent::__construct();
    /* Cargamos la base de datos */
    $this->load->database();
    /* Cargamos la libreria*/
    $this->load->library('Grocery_CRUD');
    /* Añadimos el helper al controlador */
    $this->load->helper('url');
  }

  function index()
  {
    /*
     * Mandamos todo lo que llegue a la funcion
     * administracion().
     **/
    redirect('crud/administracion');
    
  }

  /*
   *
   **/
  function administracion()
  {
    try{

    /* Creamos el objeto */
    $crud = new grocery_CRUD();

    /* Seleccionamos el tema */
    // $crud->set_theme('twitter-bootstrap');
    $crud->set_theme('flexigrid');

    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
    $crud->set_table('perfil');

    /* Le asignamos un nombre */
    $crud->set_subject('Perfiles');

    /* Asignamos el idioma español */
    $crud->set_language('spanish');

    /* Aqui le decimos a grocery que estos campos son obligatorios */
    $crud->required_fields(
      'idPerfil',
      'nombrePerfil',
      'descripcionPerfil',
      'idEstilo',
      'idConocimiento'
    );

    /* Aqui le indicamos que campos deseamos mostrar */
    $crud->columns(
      'idPerfil',
      'nombrePerfil',
      'descripcionPerfil',
      'idEstilo',
      'idConocimiento'
    );

    /* Generamos la tabla */
    $output = $crud->render();

    /* La cargamos en la vista situada en
    /applications/views/productos/administracion.php */
    $this->load->view('crud_view', $output);

    }catch(Exception $e){
      /* Si algo sale mal cachamos el error y lo mostramos */
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }
}
?>