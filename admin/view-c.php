<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$id=$_GET['id'];
?>
<?php
include '../inc/config.php';

$dp=mysqli_query($con,"select * from car_data where id='$id'");
$dy=mysqli_fetch_array($dp);


?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Car Information </h3>
        <!-- BASIC FORM ELELEMNTS -->

<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Car Result : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       </h4>
              
<div class="row">

  <div class="col-md-8">

 <h4 class="mb"><i class="fa fa-square"></i>Car Name : &nbsp;<?php echo strtoupper($dy['cname']);?></h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Model : &nbsp; <?php echo strtoupper($dy['cmodel']);?></h4>
     
 <h4 class="mb"><i class="fa fa-square"></i>Car Plate Number : &nbsp;<?php echo strtoupper($dy['cplateno']);?> </h4>
       
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Name : &nbsp;<?php echo strtoupper($dy['wname']);?>
       </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Occupation : &nbsp; <?php echo strtoupper($dy['woccupation']);?> </h4>
  
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Address : &nbsp; <?php echo strtoupper($dy['waddress']);?> </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Phone No: &nbsp;  <?php echo strtoupper($dy['wphoneno']);?> </h4>
  
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Email Address : &nbsp;  <?php echo strtoupper($dy['wemail']);?> </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Date Registered : &nbsp;<?php echo strtoupper($dy['date_created']);?> </h4>
 </div>

  <div class="col-md-4">
<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                        <img src="../admin/carimages/<?php echo strtoupper($dy['wimage']);?>" alt="" style="width: inherit;height: inherit;" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 300px; line-height: 20px;"></div>
                      <div>
                       
                      </div>
                    </div>
  </div>

</div>


            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->






 
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
<?php
include 'inc/footer.php';
   ?>
