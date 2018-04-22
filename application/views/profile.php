<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-primary"><?php if($value[0]->uid==$this->session->userdata('id')){ echo "'".$result[0]->firstname."' you have Subscribe Plan ".$value[0]->name." On Date ".$value[0]->date. " For ".$value[0]->days."<br>"."Package Price : ".$value[0]->amount."<br> Expiry Date : ".$value[0]->expiredate ; }?></h3> </div>
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
                                    <?php echo form_open('User_C/update');?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">First Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="name" value="<?php print_r($result[0]->firstname);?>"placeholder="Enter a First Name.." readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Last Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="sirname" value="<?php print_r($result[0]->lastname);?>"placeholder="Enter a Last Name.." readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="val-email" value="<?php print_r($result[0]->email);?>"placeholder="Your valid email.." readonly>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Contact Number <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" value="<?php print_r($result[0]->mobile);?>" placeholder="97029 *****" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Your Plan<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="val-number" value="<?php print_r($result[0]->plan);?>" placeholder="97029 *****" readonly>
                                            </div>
                                            <!--<label class="col-lg-4 col-form-label" for="val-skill">Select Your Plan<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="plan">
                                                    <option value="<?php print_r($result[0]->plan);?>"><?php print_r($result[0]->plan);?></option>
                                                    <option value="">----SELECT PLAN----</option>
                                                    <option value="india">Recently Registered India Data</option>
                                                    <option value="global">Recently Registered Global Data</option>
                                                    
                                                </select>
                                            </div>-->
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Address <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="<?php print_r($result[0]->address);?>" name="address" placeholder="Street Name , Building Name, Pin no " readonly>
                                            </div>
                                        </div>
                                       
                                     <!--   <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">SMS &amp; Alert</a> <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                <input type="checkbox" class="css-control-input" id="val-terms" name="sms" value="1">
                                                <span class="css-control-indicator"></span> Receive SMS Alerts
                                                </label>
                                            </div>
                                        </div>-->
                                        <!--<div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>-->
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