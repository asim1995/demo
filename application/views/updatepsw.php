<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Change Password</h3> </div>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php echo form_open('Index_C/change');?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Old Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control"  name="old_pass" >
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">New Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="submit" class="btn btn-primary">Update Password</button>
                                            </div>
                                        </div>
                                    <?php echo form_close();?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
             <!-- Form validation -->
    
    <?php include_once('footer.php');?>