<?php
include_once("connection.php");

?>
<?php
include_once("colorswitcher.php");
?>

<div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
		    <form method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="uname" required id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="uemail" required id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" required name="upass" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="mb-3">
    <label  class="form-label">Insert Image</label>
    <input type="file" name="uimage" class="form-control">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Select Option</label>
    <select name="uOpt" class="form-control boxed">
        <option value="0">Select Any Option</option>
        <option value="is_parent">Parent</option>
        <option value="is_hospital">Hospital</option>
    </select>
  </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div>
			  
			<input type="submit" value="REGISTER" name="btnsave">
			 
			  
			 
			</div>
			
			 </form>
		   </div>
		  </div>
		 
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div>

<?php
if (isset($_POST['btnsave']))
{
	$na= $_POST['uname'];
	$em= $_POST['uemail'];
	$pass= $_POST['upass'];
	$img = $_FILES['uimage'];

           
	$imgName = $img['name'];
	$opt = $_POST['uOpt'];

	move_uploaded_file($img['tmp_name'], "assets/images/UserImage/$imgName");

$query="INSERT INTO `user_register`(`user_name`, `user_email`, `user_password`, `user_image`, `user_opt`) VALUES ('$na','$em','$pass','$imgName','$opt')";
$res = mysqli_query($con, $query);
if($res)
{
	echo "<script>window.location.assign('login.php')</script>";
}
else
{
	echo "<script>alert('Please Enter Valid Data....')</script>";
}
}


?>



<?php
include_once("footer.php");

?>