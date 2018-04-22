<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_C extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->database();        /**load database**/
        $this->load->model('Insert_M');  /**Insert load model**/
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');    /**Insert load model**/
        $this->load->model('Select_M');   /**Insert load model**/
    }
	public function index()
	{  
         $this->load->view('login');
	}
    
    public function login()
	{   
        $submit=$this->input->post('submit'); 
     if(isset($submit)){
         $usename=$this->input->post('username');
         $password=$this->input->post('password');
         
         $data=$this->Select_M->login($usename,$password);
         if($data[0]->user_role=="superadmin"){
             $this->session->set_userdata('username',$usename);
             $this->session->set_userdata('role',"superadmin");
             $this->session->set_userdata('id',$data[0]->uuid);
             $this->session->set_flashdata('login','login successfully');
             //print_r($this->session->userdata);
             redirect('Admin_C/user');
            }
         else if($data[0]->user_role=="user"){
             $this->session->set_userdata('username',$usename);
             $this->session->set_userdata('role',"user");
             $this->session->set_userdata('id',$data[0]->uuid);
             $this->session->set_flashdata('login','login successfully');
             //print_r($this->session->userdata);
             redirect('User_C/dashboard');
            }
         else{
             $url=site_url().'/Index_C';
                echo "<script>alert('Login Unsuccessfully OR Inactive');window.location.href='$url';</script>";
            }
        }
	}
    
    public function Dashboard()
	{   $username=$this->session->userdata('username');
        if(isset($username)){
		$this->load->view('index');
        }else{
            $this->load->view('pageerror404');
        }
	}
    public function logout()
	{   $username=$this->session->userdata('username');
        if(isset($username)){
		$this->session->sess_destroy();
        //print_r($this->session);
            redirect('Index_C');
        }
	}
    public function change()
	{   
        $username=$this->session->userdata('username');
        if(isset($username)){
        $submit=$this->input->post('submit'); 
     if(isset($submit)){
         $oldpass=$this->input->post('old_pass');
         $usename=$this->session->userdata('username');
         $password=$this->input->post('val-confirm-password');
         
         $data=$this->Select_M->login($usename,$oldpass);
         if($data=="1"){
                $data=$this->Insert_M->updatepass($usename,$password);
              $this->session->set_flashdata('update','password successfully');
             redirect('User_C/dashboard');
            }
         else{
              $this->session->set_flashdata('update','password Unsuccessfully');
             redirect('User_C/dashboard');
         }
        }
		$this->load->view('updatepsw');
	} else{
            $this->load->view('pageerror404');
        }
    }
}
