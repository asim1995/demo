<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_M extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    /*Insert query*/
    
    public function adduser($data){
        $query=$this->db->insert('user',$data);
        return $query;
    }
    public function addlogin($data){
        $query=$this->db->insert('login',$data);
        return $query;
    }
    public function adddatabase($data){
        $query=$this->db->insert('domain',$data);
        return $query;
    }
    public function addplan($data){
        $query=$this->db->insert('plan',$data);
        return $query;
    }
    public function planusermapping($data){
        $query=$this->db->insert('user_plan_mapping',$data);
        return $query;
    }
    
    
    
    
    /*Update query*/
    
    public function updateuser($data){
        $this->db->where('username',$data['username']);
        $query=$this->db->update('user',$data);
        return $query;
    }
    public function updatepass($usename,$password){
        $this->db->where('username',$usename);
        $query=$this->db->update('login',array('password'=>$password));
        return $query;
    }
    public function updateplan($data){
        $this->db->where('uuid',$data['uuid']);
        $query=$this->db->update('plan',$data);
        return $query;
    }
    
}