<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
        // $this->output->enable_profiler();
    }

    public function edit()
    {
         
         $this->load->view("edit" ) ;
                
    }


    


    public function signin(){
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');

        $this->load->library("form_validation");
        $this->form_validation->set_rules("email", "Email", "valid_email|required|trim");
        $this->form_validation->set_rules("pwd", "Password","required|trim");

        if ($this->form_validation->run() === FALSE ){
                // echo "testing false";
            $this->load->view("signin");
        }
        else {
            $this->load->model("User");
            $user = $this->User->get_user_info($email, $pwd);
            if ( $user ){      
                    //store user infor in session.
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('first_name', $user['first_name']);
                $this->session->set_userdata('last_name', $user['last_name']);
                $this->session->set_userdata('email', $user['email']);
                $this->session->set_userdata('user_level', $user['user_level']);

                header("Location:/dashboard");
                
            }
            else{
                // echo "----";
                $this->session->set_flashdata('error', "wrong email account or password.");
                 header("Location:/signin");
                // $this->load->view("signin"); //this is not working properly, flashdata needs another http request
            }
        }
    }


    public function register(){
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
             $this->load->view("register" );
            // redirect("/register");
        }
        else {
            $this->load->model('User');
            if ($this->User->check_user_email($email)){
                //if email address is already taken
                // echo "am i here";
                $this->session->set_flashdata('error', "email address is already taken");
                header("Location:/register");
                // $this->load->view("register");

            }
            else {

                // echo "register
                $this->User->add_new_user($this->input->post());
                //will above add_new_user alway succeed, memory issue etc.. how do you verify, maybe i could check it with another 
                //database query below check email 
                $user = $this->User->get_user_info($email, $pwd);
                if ($user){
                    //store user infor in session.
                    $this->session->set_userdata('user_id', $user['id']);
                    $this->session->set_userdata('first_name', $user['first_name']);
                    $this->session->set_userdata('last_name', $user['last_name']);
                    $this->session->set_userdata('email', $user['email']);
                    $this->session->set_userdata('user_level', $user['user_level']);

                    //redirect("/welcome");//http://localhost:8888/index.php?welcome, can't run redirect method
                    Header("Location:/dashboard"); 
                }
                
                
            

            }            
        }


    }
}

