<?php require_once ('fileLogistic.php');?>
<?php
session_start();
error_reporting(0);

if(isset($_POST['insert']))
  {
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($sql);
if($num>0){
header("location:admin.php");
exit();
}
else
{

header("location:index.php");
exit();
}
}


?>
<!DOCTYPE HTML>
<?php include ("includes/head.php"); ?>
<html lang="en">

 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body>
<?php include ('includes\nav.php'); ?>

<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
  
      <div class="col-md-auto">
        <h3>Admin Login Page</h3>
         
        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Username<span>*</span></label>
              <input type="text" name="username" class="form-control white_bg" id="fullname" required>
            </div>
               <div class="form-group">
              <label class="control-label">Password<span>*</span></label>
              <input type="password" name="password" class="form-control white_bg" id="fullname" required>
            </div>
         
            <div class="form-group">
              <input type="submit" name="insert" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
      
    </div>
 
  
</section>
<!-- /Contact-us--> 

<?php include ('includes\footer.php'); ?>
<!--Footer -->

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
