<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->helper(["form" => "url"]);
	}

	public function index(){
		$this->load->view('login/login', ["titulo" => "Kraken Dev - Inventario"]);
	}

	public function login_with_menssage($mensage){
		/**
		 *  Vista de login con un mensaje de alerta.
		 */
		$this->load->view('login/login', ["titulo" => "Kraken Dev - Inventario", "msg" => $mensage]);
	}

	public function dashboard(){
		/**
		 * Aqui se comienzan a armar las sessiones.
		 */
		echo "Has pasado el inicio de session";
	}

	

	public function filter(){
		/**
		 * Funcion para procesar los campos de texto 
		 */	
		$model = $this->load->model("usuarios_model");
		$nombre_usuario = $this->input->post("user_name");
		$clave_usuario = $this->input->post("user_pass");
		if($nombre_usuario == "" && $clave_usuario == ""){
			$this->login_with_menssage("Asegurece de Llenar el Formulario");
		}else{
			if($this->usuarios_model->get_user_registered($nombre_usuario) == true){
				$data_user = $this->usuarios_model->get_data_user($nombre_usuario, $clave_usuario);
				foreach ($data_user as $key) {
					if($key->nom_usr == $nombre_usuario && $key->pas_user == $this->usuarios_model->set_sql_password($clave_usuario)){
						$set_user_session = array(
							"id" 	=> $key->id,
							"rol" 	=> $key->id_rol_fk,
							"pers" 	=> $key->id_persona_fk
						);
						$this->session->set_userdata($set_user_session);
						$this->dashboard();
					}else{
						$this->login_with_menssage("Los datos ingresados han sido incorrectos. !");
					}
				}
			}else{
				$this->login_with_menssage("El usuario que usted ha ingresado no existe !");
			}
		}
	}
}
