<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Creat Plan</h3> </div>
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
                                    <?php echo form_open('Plan_C/');?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Name<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter a Plan Name..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Validity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="validity" placeholder="Enter a Plan Validity In days">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Charges <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  id="firstNumber" name="charge" placeholder="Enter a Plan Charges ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Discount (%)<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" onkeyup="divideBy();" id="secondNumber" name="discount" placeholder="Enter a Plan Discount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Plan Final amount <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="result" name="amount" placeholder="Enter a Plan Ammount" value="" readonly>
                                            </div>
                                        </div>
                                                                                
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
            
<script>   
    function divideBy() 
{ 
        num1 = document.getElementById("firstNumber").value;
        num2 = document.getElementById("secondNumber").value;
        var num =num1*(num2/100);
        var num3=num1-num;
document.getElementById("result").value = num3;
}     
</script>            