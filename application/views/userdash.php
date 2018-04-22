<?php include_once('header.php');
include_once('nav.php');       
include_once('sidebar.php');?>
       
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-primary"><?php if($value[0]->uid==$this->session->userdata('id')){ echo "'".$result[0]->firstname."' you have Subscribe Plan ".$value[0]->name." On Date ".$value[0]->date. " For ".$value[0]->days."<br> Expiry Date : ".$value[0]->expiredate ; }
                        
$date2 = new DateTime($value[0]->date);
$date1 = new DateTime($value[0]->expiredate);
$interval = $date1->diff($date2);
echo "<br> Remain Days " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
// shows the total amount of days (not divided into years, months and days like above)
echo "Total " . $interval->days . " days ";
                        
                        ?></h3> </div>
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
                                                <th>latest database</th>
                                                <th>Creation time</th>
                                                <th>Domain</th>
                                                <th>Size</th>
                                                <th>Download</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody><?php foreach($result as $value):?>
                                            <tr>
                                                <td><?php echo $value->name;?></td>
                                                <td><?php echo $value->time;?></td>
                                                <td><?php echo $value->domian;?></td>
                                                <td><?php $path=filesize("C://xampp/htdocs/admin/".$value->path); echo round($path/1024)." KB";?></td>
                                                <td>
                                                   <a href="<?php echo base_url().$value->path;?>" download="<?php echo $value->name;?>"><button type="submit" name="submit" class="btn btn-success">Download <i class="ti-download">  </i></button></a>
                                                </td>
                                                
                                                
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