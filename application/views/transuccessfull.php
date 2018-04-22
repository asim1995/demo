<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               <!-- <div class="col-md-7 align-self-center">
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
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                        </div>
                                    </header>

                                   <h3 class="text-primary"><?php if($value[0]->uid==$this->session->userdata('id')){ echo "'".$result[0]->firstname."' you have Subscribe Plan ".$value[0]->name." On Date ".$value[0]->date. " For ".$value[0]->days."<br>"."Package Price : ".$value[0]->amount."<br> Expiry Date : ".$value[0]->expiredate ; }?></h3>
                                  
                                    <!--<div class="contacts">
                                        <a href=""><i class="fa fa-plus"></i></a>
                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-envelope"></i></a>
                                        <div class="clear"></div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    

                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         <?php include_once('footer_table.php');?>