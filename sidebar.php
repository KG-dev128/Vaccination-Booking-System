<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Vaccination center</title>
  <!-- loader-->
  <!-- <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script> -->
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
      <a href="index.php">
        <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Vaccination Center</h5>
      </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <?php
      if ($_SESSION['opt'] != 'is_parent') { ?>
        <li>
          <a href="allocation.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Allocation Info</span>
          </a>
        </li>
      <?php }
      ?>

      <?php
      if ($_SESSION['opt'] != 'is_parent') { ?>
        <li>
          <a href="#">
            <i class="fa fa-area-chart"></i> Vaccination Details
            <i class="fa arrow"></i>
          </a>
          <ul class="sidebar-nav">
            <li>
              <a href="addvaccination.php"> Add Vaccination </a>
            </li>
            <li>
              <a href="showvaccination.php"> Show Vaccination </a>
            </li>
          </ul>
        </li>
      <?php }
      ?>
      <?php
      if ($_SESSION['opt'] != 'is_hospital') { ?>
        <li>
          <a href="#">
            <i class="fa fa-th-large"></i> Hospital Details
            <i class="fa arrow"></i>
          </a>
          <ul class="sidebar-nav">
            <li>
              <a href="addhospital.php"> Add Hospital </a>
            </li>
            <li>
              <a href="showhospital.php"> Show Hospital </a>
            </li>
          </ul>
        </li>
      <?php }
      ?>

      <?php
      if ($_SESSION['opt'] != 'is_hospital') { ?>
        <li>
          <a href="vaccinationform.php">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>VaccinationForm</span>
          </a>
        </li>
      <?php }
      ?>


<?php

if ($_SESSION['opt'] != 'is_hospital') {

 
?>
        
      <li>
        <a href="profile.php">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>
<?php }
?>

      <?php

      if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {

       
      ?>


        <li><a href="childdetail.php"><i class="fa fa-th-large text-white"></i> <span>Child Detail</span></a></li>

      <?php }
      ?>
  <?php
  if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
    ?>
      <li>
        <a href="approverequest.php" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Approved Request</span>
        </a>
      </li>
    <?php }
    ?>

      <?php
      if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {
        ?>
      <li>
        <a href="rejectrequest.php" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Reject Request</span>
        </a>
      </li>
        <?php }
        ?>
      <li>
        <a href="loginout.php" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Logout</span>
        </a>
      </li>

      <li>
        <a href="register.php" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>





    </ul>

  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->

  <script src="assets/plugins/Chart.js/Chart.min.js"></script>

  <!-- Index js -->
  <script src="assets/js/index.js"></script>


</body>

</html>