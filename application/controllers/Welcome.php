<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}

	public function index(){
		$this->load->view('login/login', ["titulo" => "Kraken Dev - Inventario"]);
	}

	public function filter(){
		
		echo "1";
		/*if($model->usuarios_model->get_user_registered($nombre_usuario) == TRUE){

		}else{

		}*/
	}
}
