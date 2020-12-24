<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
$_SESSION['pmsg']=""; 
$fd=mysqli_query($con,"SELECT * FROM admin WHERE email='".$_SESSION['email']."'");
$pv=mysqli_fetch_array($fd);
?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12 mt">
            <div class="row content-panel">
                    <div class="row">
                      
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">My Profile Information : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php
        if (!empty($_SESSION['pmsg'])) {
           echo $_SESSION['pmsg'];
           $_SESSION['pmsg']="";
         } 
          
         
         
        ?></h4>
              <form class="form-horizontal style-form" method="post" action="cpass.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"> Name :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="name" value="<?php echo $pv['name']; ?>" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email :</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control round-form" name="email" value="<?php echo $pv['email']; ?>" required="required">
                  </div>
                </div>



                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="password" value="<?php echo $pv['password']; ?>" required="required">
                  </div>
                </div>

                  
               


<br/>
                <div class="row">
                   <div class="col-md-3"></div>
                  <div class="col-md-8"><button type="submit" name="submit" class="btn btn-info col-md-4">Update Data</button></div>


</div>
<br/><br/><br/>
              </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  <?php
include 'inc/footer.php';
   ?>