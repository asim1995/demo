<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_C extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->database();      /*     *load database**/
        $this->load->model('Insert_M');  /**Insert load model**/
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');     /**Insert load model**/
        $this->load->model('Select_M');   /**Insert load model**/
    }
    
	public function index()
	{ 
		$this->load->view('login');
	}
    
    public function creat()
	{   
         $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        if(isset($submit)){
            $id=uniqid();
            $data=array(
            'firstname'=>$this->input->post('name'),
            'lastname'=>$this->input->post('sirname'),    
            'email'=>$this->input->post('val-email'),    
            'username'=>$this->input->post('val-username'),    
            'password'=>$this->input->post('val-password'),    
            'mobile'=>$this->input->post('val-number'),    
            'plan'=>$this->input->post('plan'),    
            'address'=>$this->input->post('address'),    
            'sms'=>$this->input->post('sms'),    
            'uuid'=>$id,    
            );
            $datalogin=array(
                'username'=>$this->input->post('val-username'),    
                'password'=>$this->input->post('val-password'),
                'user_role'=>"user", 
                'status'=>"inactive", 
                'uuid'=>$id, 
            );
            
            $data=$this->Insert_M->adduser($data);
            $data=$this->Insert_M->addlogin($datalogin);
            if($data){
                 $this->session->set_flashdata('update','user information updated successfully');
                redirect('User_C/creat');
            }
        }else{
		  $this->load->view('addaccount');
        }
      
        } else{
            $this->load->view('pageerror404');
        }
	}
    
    public function dashboard()
	{  
         $username=$this->session->userdata('username');
        if(isset($username)){

        $data['result']=$this->Select_M->domain();
        $data['value']=$this->Select_M->selectuserplan();    
		$this->load->view('userdash',$data);
	}
        else{
            $this->load->view('pageerror404');
        }
    }
    
    public function update()
	{   $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        if(isset($submit)){
            $data=array(
            'firstname'=>$this->input->post('name'),
            'lastname'=>$this->input->post('sirname'),    
            'email'=>$this->input->post('val-email'),    
            'username'=>$this->session->userdata('username'),    
            'password'=>$this->input->post('val-password'),    
            'mobile'=>$this->input->post('val-number'),    
            'plan'=>$this->input->post('plan'),    
            'address'=>$this->input->post('address'),    
            'sms'=>$this->input->post('sms'),      
            );
            $data=$this->Insert_M->updateuser($data);
          
            if($data){
                $this->session->set_flashdata('update','user information updated successfully');
              redirect('User_C/dashboard');
            }
        
        }
        $id=$this->session->userdata('id');
        $data['result']=$this->Select_M->selectuser($id);
		$this->load->view('updateaccount',$data);
            
        } else{
            $this->load->view('pageerror404');
        }
	}
    
    public function profile()
	{  
        $username=$this->session->userdata('username');
        if(isset($username)){

        $uuid=$this->session->userdata('id');
        $data['value']=$this->Select_M->selectuserplan();
        $data['result']=$this->Select_M->selectuser($uuid);
		$this->load->view('profile',$data);
            
        } else{
            $this->load->view('pageerror404');
        }
	}
    
    public function plan(){
       $username=$this->session->userdata('username');
        if(isset($username)){

        $uuid=$this->session->userdata('id');
        $data['result']=$this->Select_M->selectuserplan();
        $data['value']=$this->Select_M->selectuser($uuid);
		$this->load->view('userplanlist',$data);
            
        } else{
            $this->load->view('pageerror404');
        } 
    }
}