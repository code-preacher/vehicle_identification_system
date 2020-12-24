<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$_SESSION['xmsg']="";
?>
<?php
include '../inc/config.php';
if(isset($_POST['submit'])){
extract($_POST);
$date=date("d-m-y @ g:i A");
          $pix=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
          $folder="securityimages/" ;  
          $pd=uniqid().'_'.$pix; 
          
          move_uploaded_file($temp,$folder.$pd)  ;

$da=mysqli_query($con,"insert into security(name,email,phoneno,password,position,image,date_created) values('$name','$email','$phoneno','$password','$position','$pd','$date')");
if ($da) {
$_SESSION['xmsg']='<span style="color:#5cb85c;">'."Security Data added successfully....".'</span>';

} else {
  $_SESSION['xmsg']='<span style="color:#d9534f;">'."Error in adding Security Data....".'</span>';

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
        <h3><i class="fa fa-angle-right"></i> Add Security Information </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Security Data : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php if (!empty($_SESSION['xmsg'])) {
          echo $_SESSION['xmsg'];
          $_SESSION['xmsg']="";
        }  ?></h4>
              <form class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Security Name :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="name" placeholder="Please enter Security name" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Security Email :</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control round-form" name="email" placeholder="Please enter security email" required="required">
                  </div>
                </div>


                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Security Phone Number :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="phoneno" placeholder="Please enter security phone number" required="required">
                  </div>
                </div>

                  
             

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Security Password :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-form" name="password" placeholder="Please enter security password" required="required">
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Select Security Position :</label>
                  <div class="col-sm-10">
                    <select class="form-control round-form" name="position" required="required">
                      <option value="Gate 1">Gate 1</option>
                      <option value="Gate 2">Gate 2</option>
                      <option value="Gate 3">Gate 3</option>
                      <option value="Staff Office">Staff Office</option>
                      <option value="General Environment">General Environment</option>
                    </select> 
                  </div>
                </div>

                  

 <!--<div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                 
                        <input type="file" name="pix" class="bg-info" required="required" />
                 
                </div>-->
               

<div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../img/avatar.png" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="pix" class="default" required="required" />
                        </span>

                       
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                </div>
<br/>
                <div class="row">
                   <div class="col-md-3"></div>
                  <div class="col-md-8"><button type="submit" name="submit" class="btn btn-info col-md-4">Save Data</button></div>


</div>
<br/><br/><br/>
              </form>
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
