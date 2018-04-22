<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->database();        /**load database**/
        $this->load->model('Insert_M');  /**Insert load model**/
        $this->load->library(array('session','upload'));
        $this->load->helper(array('form', 'url','path'));
        $this->load->model('Select_M');   /**Insert load model**/     
       $this->load->library('upload');

    }
    
    public function do_upload()
        {  
        $username=$this->session->userdata('username');
        if(isset($username)){

          $submit=$this->input->post('submit');
        if(isset($submit)){  
            $this->input->post('userfile');
            $file_typeArray = $_FILES['userfile']['name'] ;
            $extintion = end(explode(".",$file_typeArray));
            $this->load->model('UploadFile_M');
            $name = strtolower(preg_replace('/\s+/', '', $this->input->post('userfile')));
            $file_address = 'assets/upload/'.$_FILES['userfile']['name'];
            $file = $_FILES['userfile']['name'] ;
            $n = $this->UploadFile_M->addFile($file,$name);
           
            if($n == 1){
            
            $id=uniqid();
                    $date = date('d/m/Y h:i:s a', time());
                    $name=$this->input->post('excel');
                    $data=array(
                    'name'=>$this->input->post('name'),
                    'domian'=>$this->input->post('domain'),    
                    'time'=>$date,    
                    'size'=> "dsa",    
                    'path'=> "$file_address",    
                    'uuid'=> $id,    
                    );
                    $data=$this->Insert_M->adddatabase($data);

                    if($data){
                        $this->session->set_flashdata('update','user information updated successfully');
                      redirect('User_C/dashboard');
                    }
            redirect('Upload_FileCont/upload');
            }
        }
         $this->load->view('adddatabase');
        }
        else{
            $this->load->view('pageerror404');
        }
    }
    
    public function user(){
         $username=$this->session->userdata('username');
        if(isset($username)){
         
        $data['result']=$this->Select_M->user();
        $this->load->view('userlist',$data);
         $username=$this->session->userdata('username');
        }
        else{
            $this->load->view('pageerror404');
        }
    }
}
?>