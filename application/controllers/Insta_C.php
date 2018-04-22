<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insta_C extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->database();        /**load database**/
        $this->load->model('Insert_M');  /**Insert load model**/
        $this->load->library(array('session','upload'));
        $this->load->helper(array('form', 'url','path'));
        $this->load->model('Select_M');   /**Insert load model**/     
       $this->load->library('upload');

    }
    
    public function index()
        { 
         $username=$this->session->userdata('username');
        if(isset($username)){

        $submit=$this->input->post('submit');
        $id=$this->input->get('id');
        $data=$this->Select_M->selectplan($id);   
        $this->session->set_userdata('planid',$id);
        
        if(isset($id)){
            $data=array(
                'user'=>$this->session->userdata('username'),       
                'mobile'=>"7208299790",             
                'purpose'=>$data[0]->name,             
                'email'=>"ganes@gmail.com",             
                'amount'=>$data[0]->amount,
                );        
        
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
                array("X-Api-Key:test_1d410ea578cbc47cb9862327b14",
                      "X-Auth-Token:test_4ccd6fe00a86f865441aac4c29f"));
    $payload = Array(
        'purpose' => $data['purpose'],
        'amount' => $data['amount'],
        'phone' => $data['mobile'],
        'buyer_name' => $data['user'],
        'redirect_url' => base_url('Insta_C/success'),
        'send_email' => true,
        'webhook' => '',//'http://www.example.com/webhook/',
        'send_sms' => true,
        'email' => $data['email'],
        'allow_repeated_payments' => false
    );
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    $response = curl_exec($ch);
    curl_close($ch); 

        $json_decode=json_decode($response ,true);
        $long_url=$json_decode['payment_request']['longurl'];
       header('location:'.$long_url); //print_r($long_url);
//        print_r($json_decode);
//    echo $response;
        }
            
        } else{
            $this->load->view('pageerror404');
        }
    }
        
        
    public function success(){
         $username=$this->session->userdata('username');
        if(isset($username)){
            $id= $this->session->userdata('planid');
            $data=$this->Select_M->selectplan($id);
            $days=date('d-m-Y', strtotime('+'.$data[0]->days.' day', strtotime(date('d-m-Y'))));
            if(isset($_GET['payment_id'])){
            $data=array(
                'pid'=>$id,       
                'uid'=>$this->session->userdata('id'),
                'status'=>"success",
                'payment_id'=>$_GET['payment_id'],
                'payment_request_id'=>$_GET['payment_request_id'],
                'date'=>date('d-m-Y'),
                'expiredate'=>$days,
                );
                
            $this->Insert_M->planusermapping($data); 
            $data['result1']=$data;
            $uuid=$this->session->userdata('id');
            $data['value']=$this->Select_M->selectuserplan();
            $data['result']=$this->Select_M->selectuser($uuid);
		      $this->load->view('transuccessfull',$data);
            }
        
        }
       else{
            $this->load->view('pageerror404');
        }
    }
    
}