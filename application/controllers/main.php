<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{

		$this->load->view("index" ) ;
		

	}

	public function signin(){
		
		$this->load->view("signin");
	}

	public function register(){

		$this->load->view("register");
	}

	public function user_dashboard(){

		$this->load->view("user_dashboard");
	}

	public function logoff(){
		$this->session->sess_destroy();
		header("Location:/");

	}


}

//end of main controller