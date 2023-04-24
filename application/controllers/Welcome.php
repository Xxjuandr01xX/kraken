<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * Creacion de interface inicial y usuario administrador
	 * creacion de modulo para instalar extensiones.
	 * modulo de configuracion.
	 */
	public function index(){
		$this->load->view('welcome_message');
	}
}
