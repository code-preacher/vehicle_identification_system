<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$dx="";
?>
<?php
include '../inc/config.php';
if(isset($_POST['submit'])){
extract($_POST);

$dp=mysqli_query($con,"select * from car_data where cplateno='$data'");
$dy=mysqli_fetch_array($dp);
if ($dy) {
$dx='
   <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Search Result : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       </h4>
              
<div class="row">

  <div class="col-md-8">

 <h4 class="mb"><i class="fa fa-square"></i>Car Name : &nbsp;'.strtoupper($dy['cname']).' </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Model : &nbsp; '.strtoupper($dy['cmodel']).' </h4>
     
 <h4 class="mb"><i class="fa fa-square"></i>Car Plate Number : &nbsp;'.strtoupper($dy['cplateno']).' </h4>
       
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Name : &nbsp;'.strtoupper($dy['wname']).' 
       </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Occupation : &nbsp; '.strtoupper($dy['woccupation']).'  </h4>
  
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Address : &nbsp;  '.strtoupper($dy['waddress']).' </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Phone No: &nbsp;  '.strtoupper($dy['wphoneno']).' </h4>
  
 <h4 class="mb"><i class="fa fa-square"></i>Car Owner Email Address : &nbsp;  '.strtoupper($dy['wemail']).' </h4>
 
 <h4 class="mb"><i class="fa fa-square"></i>Date Registered : &nbsp; '.strtoupper($dy['date_created']).' </h4>
 </div>

  <div class="col-md-4">
<div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 300px; height: 300px;">
                        <img src="../admin/carimages/'.$dy['wimage'].'" alt="" style="width: inherit;height: inherit;" />
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

';

} else {

  $dx='

<div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Search Result: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

        </h4>
         <h4 style="color:#d9534f;">
                            No result found for &nbsp; <i><b><span style="color:#0b154d;">  " '.$data.' "</span></b></i>
                        </h4>             
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->

';

}

}


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
              <h4 class="mb"><i class="fa fa-angle-right"></i>Search for Car Data </h4>
              <form class="form-horizontal style-form" method="post" action="#">
                <div class="form-group">
                  
                  <div class="col-sm-9 col-xs-10">
                    <input type="text" class="form-control" name="data" placeholder="Please enter car plate number" required="required">
                     <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="submit" name="submit"><i class="fa fa-search"></i></button>
                        </span>
                  </div>
                </div>


              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->


<!--Result-->
<?php echo $dx;?>

 <?php  echo $dx=""; ?>




 
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
<?php
include 'inc/footer.php';
   ?>
