<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
       
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-primary">Hello "<?php print_r($this->session->userdata('username'));?>" Your subscription is "India" Data  23 days Remaining For expiry</h3> </div>
                <!--<div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>-->
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                  
                                <div class="card-content">
                                     <?php if($this->session->flashdata('update')=="user information updated successfully"){?>
                                    <div class="alert alert-primary" id="msg">
                                        user information updated successfully.
                                    </div>  <?php }else if($this->session->flashdata('update')=="user information updated successfully"){?>
                                    <div class="alert alert-secondary" id="msg">
                                        This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>  <?php }else  if($this->session->flashdata('login')=="login successfully"){?>
                                    <div class="alert alert-success" id="msg">
                                       You Have Login Successfully
                                    </div>  <?php }else  if($this->session->flashdata('update')=="password Unsuccessfully"){?>
                                    <div class="alert alert-danger" id="msg">
                                        OLD Password Does Not Matched
                                    </div>  <?php }else  if($this->session->flashdata('update')=="user information updated successfully"){?>
                                    <div class="alert alert-warning" id="msg">
                                        This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>  <?php  }else if($this->session->flashdata('update')=="password successfully"){?>
                                    <div class="alert alert-info" id="msg">
                                        Your Password Is Updated SuccessFully
                                    </div>  <?php }else  if($this->session->flashdata('update')=="user information updated successfully"){?>
                                    <div class="alert alert-light" id="msg">
                                        This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div>  <?php } else if($this->session->flashdata('update')=="user information updated successfully"){?>
                                    <div class="alert alert-dark" id="msg">
                                        This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                    </div> <?php }?>
                                </div>
                          
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title">Data Table</h4>
                                <h6 class="card-subtitle">Data table example</h6>-->
                                <div class="table-responsive ">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Contact</th>
                                                <th>Plan</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody><?php foreach($result as $value):?>
                                            <tr>
                                                <td><?php echo $value->firstname;?></td>
                                                <td><?php echo $value->lastname;?></td>
                                                <td><?php echo $value->mobile;?></td>
                                                <td><?php echo $value->plan; ?></td>
                                                <td><?php echo $value->address;?>  </td>
                                                <td><?php echo "Active";?>  </td>
                                                
                                                
                                            </tr>
                                                  <?php endforeach;?>                                     
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
           <?php include_once('footer_table.php');?>