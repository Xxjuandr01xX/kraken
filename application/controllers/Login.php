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

	public function input_validation($username, $password){
		/**
		 * Funcion para validar los campos de texto
		 */
		$trim_user = trim($username);
		$trim_pass = trim($password);
		if($trim_user !== "" && $trim_pass !== ""){
			$pattern = '/^[a-zA-Z, ]*$/';
			if (preg_match($pattern, $trim_user) && preg_match($pattern, $trim_pass)) {
				return true;   
			}
		}
	}

	public function filter(){
		/**
		 * Funcion para procesar los campos de texto 
		 */	
		$model = $this->load->model("usuarios_model");
		$nombre_usuario = $this->input->post("user_name");
		$clave_usuario = $this->input->post("user_pass");
		if($this->input_validation($username, $password) == true){
			if($model->usuarios_model->get_user_registered($nombre_usuario) == true){
				foreach($data as $model->usuarios_model->get_data_user($nombre_usuario, $clave_usuario)){
					if($data->nom_usr == $nombre_usuario && $data->pas_user == $model->usuarios_model->set_sql_password($clave_usuario)){
						$user_data = array(
							"usr" => $data->nom_usr,
							"rol" => $data->id_rol_fk,
							"per" => $data->id_persona_fk
						);
						$this->session->set_userdata($user_data);
						redirect('/Home/index', 'refresh');
					}else{
						redirect('/Login/index', 'refresh');
					}
				}
			}
		}else{
			
		}
	}
}
