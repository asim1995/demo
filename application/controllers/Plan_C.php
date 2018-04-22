<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_C extends CI_Controller {
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
	{   $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        if(isset($submit)){
            $data=array(
            'uuid'=>uniqid(),    
            'name'=>$this->input->post('name'),
            'days'=>$this->input->post('validity'),
            'charge'=>$this->input->post('charge'),    
            'discount'=>$this->input->post('discount'),    
            'amount'=>$this->input->post('amount'),         
            );
            $data=$this->Insert_M->addplan($data);
          
            if($data){
                $this->session->set_flashdata('update','user information updated successfully');
                redirect('Plan_C/dashboard');
            }
        }
         $this->load->view('addplan');
        
        } else{
            $this->load->view('pageerror404');
        }
	}
    public function dashboard()
	{  
         $username=$this->session->userdata('username');
        if(isset($username)){

        $data['result']=$this->Select_M->plan();
		$this->load->view('viewplan',$data);
        
        } else{
            $this->load->view('pageerror404');
        }
	}
    
    public function select()
	{  
        $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        $id=$this->input->get('id');
 
        if(isset($submit)){

            $data=array(
            'pid'=>$id,       
            'uid'=>$this->session->userdata('id'),             
            );
            $data=$this->Insert_M->planusermapping($data);
    
            if($data){
                $this->session->set_flashdata('update','user information updated successfully');
              redirect('Plan_C/dashboard');
            }
        
        }
        $data['result']=$this->Select_M->plan();
		$this->load->view('viewuserplan',$data);
        
        } else{
            $this->load->view('pageerror404');
        }
	}
    
    public function delete()
	{  
         $username=$this->session->userdata('username');
        if(isset($username)){

        $id=$this->input->get('id');
        $this->load->model('Delete_M');
        $this->Delete_M->plan($id);
        $this->session->set_flashdata('update','user information updated successfully');
        redirect('Plan_C/dashboard');
         
        } else{
            $this->load->view('pageerror404');
        }    
	}
    
    
    public function update()
	{  
        $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        $id=$this->input->get('id');
        if(isset($submit)){
            $data=array(
            'name'=>$this->input->post('name'),
            'days'=>$this->input->post('validity'),       
            'charge'=>$this->session->userdata('charge'),    
            'discount'=>$this->input->post('discount'),    
            'amount'=>$this->input->post('amount'),          
            'uuid'=>$this->input->post('id'),          
            );
            $data=$this->Insert_M->updateplan($data);
          
            if($data){
                $this->session->set_flashdata('update','user information updated successfully');
              redirect('User_C/dashboard');
            }
        
        }
        
        $data['result']=$this->Select_M->selectplan($id);
		$this->load->view('updateplan',$data);
        
        } else{
            $this->load->view('pageerror404');
        }
	}
    
}