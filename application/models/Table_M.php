<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_M extends CI_Model {

    /********function for create database************/
    function db(){
        $this->load->dbforge();
       
    if ($this->dbforge->create_database("whoindiadata"))
        {
           echo 'Database Created!';
         return 1;
        }
    }
    /********function for drop databse*************/
    function Drop(){
         $this->load->dbforge();
        if ($this->dbforge->drop_database("whoindiadata"))
        {
             echo 'Database deleted!';
            
        }
    }
    /*********function for create admin table*****/
    function login(){
        $this->load->dbforge();
            $admin=array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'uuid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
                ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'password' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
            'user_role' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
            ),
            );
        $this->dbforge->add_field($admin);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('login',$admin);
       $data=array('username'=>"ganesh",'password'=>"1234",'user_role'=>"superadmin");//default password is 1234
        $this->db->insert('login',$data);
            }
    
      /*********function for create admin table*****/
    function user(){
        $this->load->dbforge();
            $admin=array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'uuid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
                ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'password' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
            'firstname' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
                ),
            'lastname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'mobile' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
            'address' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
                ),
            'sms' => array(
                 'type' =>'VARCHAR',
                'constraint' => '200',
                 'null'=>TRUE,
                ),
            'plan' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
                ),
            'email' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
                )
            
            );
        $this->dbforge->add_field($admin);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user',$admin);
       
            }
    
    function database(){
        $this->load->dbforge();
            $admin=array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'uuid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
                ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'time' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
            'domian' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
            ),
            'size' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'path' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
          
            );
        $this->dbforge->add_field($admin);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('domain',$admin);
      
    }   
    function plan(){
        $this->load->dbforge();
            $admin=array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'uuid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
                ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
            'charge' => array(
                 'type' =>'VARCHAR',
                'constraint' => '100',
                 'null'=>TRUE,
            ),
            'discount' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
             'days' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
            'amount' => array(
                'type' =>'VARCHAR',
                'constraint' => '100', 
                 'null'=>TRUE,
               ),
          
            );
        $this->dbforge->add_field($admin);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('plan',$admin);
      
    }
    function userplan(){
        $this->load->dbforge();
            $admin=array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
                ),
            'uid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
                ),
            'pid' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
            'payment_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
            'date' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                ),
            'payment_request_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null'=>TRUE,
                )
            );
        $this->dbforge->add_field($admin);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_plan_mapping',$admin);
      
    }
    
}