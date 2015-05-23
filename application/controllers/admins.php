<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
        // $this->output->enable_profiler();
    }

    public function index()
    {
         
         $this->load->view("index" ) ;
                
    }




    public function remove(){
    	echo "+++;";
    	die;
    	$this->load->model("Admin");
    	

    }


    public function edit(){
    	$this->load->view("edit_admin");
    }






    public function add(){
         $this->load->view("add_user");
    }


    

    public function create(){
    	// var_dump($this->input->post());
    	// die;

    	$email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $pwd_cfn = $this->input->post('pwd_cfn');



        $this->load->library("form_validation");
        $this->form_validation->set_message('matches', 'passwords entered are not the same.');
        $this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha");
        $this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha");
        $this->form_validation->set_rules("email", "Email", "valid_email|required|trim");
        $this->form_validation->set_rules("pwd", "Password","required|trim|min_length[6]");
        $this->form_validation->set_rules("pwd_cfn", "Confirm Password","matches[pwd]");



        if ($this->form_validation->run() === FALSE ){
                    // echo "testing false";
             $this->load->view("add_user" );
            // redirect("/register");
        }
        else {
            $this->load->model('User');
            if ($this->User->check_user_email($email)){
                //if email address is already taken
                // echo "am i here";
                $this->session->set_flashdata('error', "email address is already taken");
                header("Location:/users/new");
                // $this->load->view("register");

            }
            else {

                // echo "register//will above add_new_user alway succeed, memory issue etc.. how do you verify, maybe i could check it with another 
                //database query below check email 
                if ($this->User->add_new_user($this->input->post()) ){
                	Header("Location:/dashboard"); 
                }
                else {
                	header("Location:/users/new");
                }
                
            }            
        }


    }
}

