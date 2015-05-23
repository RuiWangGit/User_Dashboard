<?php

	class Admin extends CI_Model{

		public function get_all_users(){
			$query = "SELECT * FROM users";
			return $this->db->query($query)->result_array();
		}

		public function setAdmin($id){


		}

		public function remove_user($id){
						

		}

		// public function get_all_user_and_admin(){
		// 	$this->output->enable_profiler(TRUE);
		// 	$query = "SELECT users.id, users.first_name, users.last_name, admins.created_at, admins.updated_at 
		// 			FROM admins JOIN users on admins.user_id = users.id ";

		// }

		// public function getAdmin($id){
		// 	$this->output->enable_profiler(TRUE);
		// 	$query = "SELECT admins.id, admins.user_id, admins.created_at, admins.updated_at 
		// 			FROM admins JOIN users on admins.user_id = users.id WHERE admins.user_id = ?";
		// 	$values = array($id);
		// 	// echo "am i here";
		// 	// die;
		// 	return $this->db->query($query, $values)->row_array();
		// }

		

	}
?>


