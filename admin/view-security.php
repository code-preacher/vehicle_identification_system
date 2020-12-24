<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();

?>

<?php
include '../inc/config.php';
$mt=mysqli_query($con,"select * from security order by id desc");


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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> View Security Information
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php if (!empty($_SESSION['omsg'])) {
          echo $_SESSION['omsg'];
          $_SESSION['omsg']="";
        }  ?></h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table table-responsive">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Security name</th>
                    <th>Security position</th>
                    <th>Security email address</th>
                    <th>Security password</th>
                    <th>View</th>
                    <th>Delete</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
while ($dy=$mt->fetch_array()) {
         ?>
                  <tr class="gradeX">
                    <td><?php echo $dy['name']; ?></td>
                    <td><?php echo $dy['position']; ?></td>
                    <td><?php echo $dy['email']; ?></td>
                    <td><?php echo $dy['password']; ?></td>
                    <td><a  href="view-s.php?id=<?php echo $dy['id']; ?>" ><i class="fa fa-eye"></i></a></td>
                    <td><a href="del-s.php?id=<?php echo $dy['id']; ?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash"></i></a></td>
                  </tr>

                <?php }  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  <?php
include 'inc/footer2.php';
   ?>