<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Walls extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 // $this->output->enable_profiler();



	}

	public function index()
	{
		$this->load->model("User");
		$id = $this->uri->segment(3);
		$user = $this->User->get_user_info_by_Id($id);

		$this->load->model('Message');
		$result = $this->Message->get_all_messages_and_comments($user['id']);
		// var_dump($result);
		// die;

		$hash = [];
		foreach($result as $message) {
			
			$hash[$message['message_id']][] = $message;

		}

		// var_dump($hash);
		// die;


		$this->load->view("user_wall", array('user'=>$user, 'messages'=>$hash));
	}


	public function post(){
		
		$this->load->model("Message");
		$this->Message->add_new_message($_POST);
		// redirect("/");

		// redirect("/users/show/".$_POST['wall_id']);
		// $str = "/users/show/".$_POST['wall_id'];
		// echo $str;
		// die;
		// header("Location:/".$str);
		// $this->load->view()

		

		$this->load->model("User");
		$user = $this->User->get_user_info_by_Id($_POST['wall_id']);

		$this->load->model('Message');
		$result = $this->Message->get_all_messages_and_comments($user['id']);
		
		$hash = [];
		foreach($result as $message) {
			
			$hash[$message['message_id']][] = $message;

		}
		$this->load->view("user_wall", array('user'=>$user, 'messages'=>$hash));

	}



	public function add(){
		// var_dump($_POST);
		// die;
		$this->load->model("Message");
		$this->Message->add_new_comment($_POST);
		// redirect("/users/show/".$_POST['wall_id']);

		$this->load->model("User");
		$user = $this->User->get_user_info_by_Id($_POST['wall_id']);

		$this->load->model('Message');
		$result = $this->Message->get_all_messages_and_comments($user['id']);
		
		$hash = [];
		foreach($result as $message) {
			
			$hash[$message['message_id']][] = $message;

		}
		$this->load->view("user_wall", array('user'=>$user, 'messages'=>$hash));



	}


}

//end of main controller