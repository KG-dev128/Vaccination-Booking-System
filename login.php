
<?php
include_once("connection.php");
?>
<?php
include_once("colorswitcher.php");
session_start();
?>
<div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Email Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" name="uemail" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter your email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="upass" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i> 
				  </div>
			   </div>
			  </div>
			  <select name="txtOpt" class="form-control boxed" >
        <option value="0">Select Any Option</option>
        <option value="is_parent">Parent</option>
        <option value="is_hospital">Hospital</option>
    </select>
  
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="reset-password.html">Reset Password</a>
			 </div>
			</div>
			<button type="submit" name="saveData" class="btn btn-light btn-block">Login</button>
			 
			 
			
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have Registration? <a href="register.php"> Register here</a></p>
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
	
	</div><!--wrapper-->
	<?php
	if (isset($_POST['saveData']))
	{
		$em= $_POST['uemail'];
		$pass= $_POST['upass'];
		$opt = $_POST['txtOpt'];
          
		//echo $opt;

		$query = "SELECT * FROM `user_register` WHERE user_email = '$em' and user_password = '$pass'";
		$res = mysqli_query($con, $query);
		$row = mysqli_fetch_assoc($res);

		if($em=="admin@gmail.com" && $pass=="1234")
          {
            $_SESSION['opt'] = $row['user_opt'];
            $_SESSION['username'] = "admin";
            $_SESSION['userimage'] = $row['uimage'];
            echo "<script>window.location.assign('index.php')</script>";

          }
		
		  if(isset($row['user_email']) == $em && isset($row['user_opt'])== $opt)
          {
              $_SESSION['opt'] = $row['user_opt'];
              $_SESSION['username'] = $row['user_name'];
              $_SESSION['userimage'] = $row['user_image'];
              echo "<script>window.location.assign('index.php')</script>";
          }
		  else 
		  {
			echo "<script>alert('Invalid Data....')</script>";
		  }
	}	

	?>