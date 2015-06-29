<?php

	class Message extends CI_Model{

		public function get_all_users(){
			$query = "SELECT * FROM users";
			return $this->db->query($query)->result_array();
		}


		public function get_all_messages_and_comments($id){

			

			$query = "SELECT  messages.id as 'message_id', messages.message, 
						c1.id as 'comment_id',c1.comment, c1.created_at, 
        				u1.id as 'comment_user_id', u1.first_name, u1.last_name,
       					 u2.id as 'message_user_id', u2.first_name as 'message_first_name', u2.last_name as 'message_last_name', messages.created_at as 'message_created_at'
			FROM messages left join comments c1 ON messages.id = c1.message_id
			  				join users u2 ON u2.id = messages.user_id
			  				left join users u1 ON u1.id = c1.user_id
			WHERE messages.wall_id = ?
			ORDER BY messages.created_at DESC; ";

			$values = array($id);
			return $this->db->query($query, $values)->result_array();
			// $output = [];

			// foreach($arr as $value){
			// 	if ( isset($output[$value['message_id']])){
			// 		$output[$value['message_id']]['message'].push()
			// 	}


			// }

		}



		public function add_new_message($input){
			$query = "INSERT INTO messages (message, created_at, updated_at, user_id, wall_id) VALUES(?, ?, ?, ?, ?)";
			$values = array($input['message'], date('y-m-d h:m:s'), date('y-m-d h:m:s'), 
			$this->session->userdata('user_id'), $input['wall_id']);
			return $this->db->query($query, $values);
		}


		public function add_new_comment($input){

			$query = "INSERT INTO comments (comment, created_at, updated_at, user_id, message_id) VALUES(?, ?, ?, ?, ?)";
			$values = array($input['comment'], date('y-m-d h:m:s'), date('y-m-d h:m:s'), 
			$this->session->userdata('user_id'), $input['message_id']);
			return $this->db->query($query, $values);



		}






		

	}



