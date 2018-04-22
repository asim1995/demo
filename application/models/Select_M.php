<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select_M extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    
    
    public function login($username,$password){
      $db_qry=$this->db->get_where('login',array('username'=>$username,'password'=>$password,'status'=>"Active"));
          if($db_qry->num_rows()=='1'){
              return $db_qry->result();
          }
    }
    public function selectuser($id){
      $db_qry=$this->db->get_where('user',array('uuid'=>$id));
          if($db_qry->num_rows()=='1'){
              return $db_qry->result();
          }
    }
    public function selectplan($id){
      $db_qry=$this->db->get_where('plan',array('uuid'=>$id));
          if($db_qry->num_rows()=='1'){
              return $db_qry->result();
          }
    }

    public function selectuserplan(){
      $db_qry=$this->db->query('SELECT * FROM `user_plan_mapping` INNER JOIN plan ON `plan`.`uuid`=`user_plan_mapping`.`pid`');
            
        return $db_qry->result();
   
    }
    
    
    
    
    public function domain(){
      $db_qry=$this->db->get('domain');
      return $db_qry->result();
    } 
    public function plan(){
      $db_qry=$this->db->get('plan');
      return $db_qry->result();
    }
    public function user(){
      $db_qry=$this->db->get('user');
      return $db_qry->result();
    }
    
}