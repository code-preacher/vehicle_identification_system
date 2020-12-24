<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$id=$_GET['id'];
?>
<?php
include '../inc/config.php';

$vp=mysqli_query($con,"select * from security where id='$id'");
$dm=mysqli_fetch_array($vp);


?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Security Information </h3>
        <!-- BASIC FORM ELELEMNTS -->

<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Security Result : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       </h4>
              
<div class="row">

  <div class="col-md-8">

 <h4 class="mb"><i class="fa fa-square"></i>Security Name : &nbsp;<?php echo strtoupper($dm['name']);?></h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Security Email : &nbsp; <?php echo strtoupper($dm['email']);?></h4>
     
 <h4 class="mb"><i class="fa fa-square"></i>Security Phone Number : &nbsp;<?php echo strtoupper($dm['phoneno']);?> </h4>
       
 <h4 class="mb"><i class="fa fa-square"></i>Security Password : &nbsp;<?php echo strtoupper($dm['password']);?>
       </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Security Position : &nbsp; <?php echo strtoupper($dm['position']);?> </h4>
  
 <h4 class="mb"><i class="fa fa-square"></i>Security Registed Date : &nbsp; <?php echo strtoupper($dm['date_created']);?> </h4>
 
</div>

  <div class="col-md-4">
<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                        <img src="../admin/securityimages/<?php echo strtoupper($dm['image']);?>" alt="" style="width: inherit;height: inherit;" />
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
