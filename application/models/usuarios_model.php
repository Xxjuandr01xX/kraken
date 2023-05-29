<?php
    class usuarios_model extends CI_Model{
        public function __construct(){
            $this->load->database;
        }

        public function set_sql_password($str){
            $sql = "SELECT PASSWORD('$str') AS 'convert'";
            $query = $this->db->query($sql);
            $var_return = "";
            foreach ($query as $pass) {
                $var_return = $pass->convert;
            }
            return $var_return;
        }

        public function get_user_registered($username){
            /**
             * Funcion para verificar si un usuario existe.
             */
            $sql = "SELECT * FROM core_usuarios WHERE nom_usr = '$username'";
            $query_users = $this->db->query($sql);
            if($query_users){
                return true;
            }else{
                return false;
            }
        }

        public function get_data_user($username, $passwrod){
            /**
             * Funcion para devolver datos de usuario
             */
            $users = $this->db->get_where('core_usuarios', [
                "nom_user"  => $username,
                "pass_user" => $passwrod
            ]);
            return $users->result();
        }
    }