<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboards extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
        // $this->output->enable_profiler();
    }



    public function index()
    {
        // $this->load->model('Admin');
        // $admin = $this->Admin->getAdmin($this->session->userdata('user_id'));
        if ( $this->session->userdata('user_level') === 'admin' ){
            $this->load->model('Admin');
            $users = $this->Admin->get_all_users();
            $this->load->view("admin_dashboard", array('users'=>$users)) ;
        }
        else {
            
            $this->load->model('User');
            $users = $this->User->get_all_users();

            $this->load->view("user_dashboard", array('users'=>$users)) ;
        }
                
    }



    public function edit(){


            $this->load->model('User');
            $user = $this->User->get_user_info_by_Id($this->session->userdata('user_id'));
            $this->load->view("edit_user", array('user'=>$user)) ;

        

    }



    

    public function admin()
    {
         
         $this->load->view("admin") ;
                
    }





}   

