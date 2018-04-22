<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_C extends CI_Controller {

	   public function __construct() {
        parent::__construct();
        //$this->load->model('Upload');   //To Upload file in a directory
        $this->load->database();        /**load database**/
        //$this->load->model('Insert_M');  /**Insert load model**/
        $this->load->helper('url');
        $this->load->helper('form');    /**Insert load model**/
        //$this->load->model('Select_M');   /**Insert load model**/
         $this->load->model('Table_M');
    }
    public function Database()
    {
        /*$roll=$this->session->userdata('user_role');
            if($roll=="superadmin")
        { */    
       
        $this->Table_M->db();
       /* }*/
        /*else
        {
        //redirect('Login_cont');
        } */
    }
      
/***function for altering table**/
    public function table()
    {
        /*$roll=$this->session->userdata('user_role');
        if($roll=="superadmin")
        { */
       
           $this->Table_M->login(); 
           $this->Table_M->user(); 
           $this->Table_M->database(); 
           $this->Table_M->plan(); 
           $this->Table_M->userplan(); 
          /*  }*/
       /* else
        {
        redirect('Login_cont');
        }*/
    }
/***function for altering table**/
    
          
/***function for altering table**/
   /* public function alter()
    {
        $roll=$this->session->userdata('user_role');
        if($roll=="superadmin")
        { 
           $this->load->model('CreatDb_mod');
           $this->CreatDb_mod->alter(); 
            }
        else
        {
        redirect('Login_cont');
        }
    }*/
/***function for altering table**/

  function export(){
        
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->dbutil();
             $prefs = array(     
                'format'      => 'sql',             
                'filename'    => 'emplyee.sql'
              );

            $backup =& $this->dbutil->backup($prefs); 
            $db_name =$database.' '. date("d-m-Y-H-i-s") .'.sql';
            $save = 'download/employee';
            write_file($save, $backup); 
            force_download($db_name, $backup);
    }
}