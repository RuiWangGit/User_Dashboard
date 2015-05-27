<?php

	class User extends CI_Model{

		// function authenticate_user($){

		// }

		public function get_all_users(){
			$query = "SELECT * FROM users";
			return $this->db->query($query)->result_array();
		}

		function get_user_info($email, $password){
			// $this->output->enable_profiler(TRUE);
			$query = "SELECT * FROM users WHERE email = ? and password = ? ";
			$values = array( $email, $password);
			return $this->db->query($query, $values)->row_array();
		}

		function get_user_info_by_Id($id){
			// $this->output->enable_profiler(TRUE);
			$query = "SELECT * FROM users WHERE id = ? ";
			$values  = array($id);
			return $this->db->query($query, $values) ->row_array();
		}


		function check_user_email($email){
			// $this->output->enable_profiler(TRUE);
			$query = "SELECT * FROM users WHERE email = ? ";
			$values = array( $email);
			return $this->db->query($query, $values)->row_array();
		}

		function add_new_user($input){
			// $this->output->enable_profiler(TRUE);
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, user_level) VALUES (? , ?, ?, ?, ?, ?, 'normal');";
			$values = array($input['first_name'], $input['last_name'], $input['email'], $input['pwd'], date('y-m-d h:m:s'), date('y-m-d h:m:s') );
			return $this->db->query($query, $values);
		}


		function save_description($input){

			// $this->output->enable_profiler(TRUE);
			$id = $this->session->userdata('user_id') ;
			$query = "UPDATE users set description = ?  where id = ?";
			$values = array($input, $id);
			return $this->db->query($query, $values);
		}

		function change_password($input){
			$id = $this->session->userdata('user_id') ;
			$query = "UPDATE users set password = ?  where id = ?";
			$values = array($input, $id);
			return $this->db->query($query, $values);

		}

		function save_user($input, $id){
			$query = "UPDATE users set first_name = ?, last_name = ?, email = ? where id = ?";
			$values = array($input['first_name'], $input['last_name'], $input['email'], $id );
			return $this->db->query($query, $values);

		}

	}

?>