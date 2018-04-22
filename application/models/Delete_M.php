<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_M extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    /*Insert query*/
    
    public function plan($data){
        $this->db->where('uuid',$data);
        $query=$this->db->delete('plan');
        return $query;
    }
    
}
?>