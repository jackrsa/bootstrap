<?php if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');
	/**
	* En las librerias el nombre de la clase debe coicidir con el nombre del archivo 
	* y la primera letra debe ir en mayuscula
	*/
	class Menu {
		private $arr_menu;
		
		function __construct($arr)
		{
			$this->arr_menu = $arr;
		}

		function construirMenu() {
			$ret_menu = "<nav><ul>";
			foreach ($this->arr_menu as $opcion) {
				$ret_menu = $ret_menu."<li>".$opcion."</li>";
			}
			$ret_menu = $ret_menu."</ul></nav>";
			return $ret_menu;
		}
	}
?>