<?php
include_once("header.php");
?>
<?php
include_once("sidebar.php");
?>
<?php
include_once("colorswitcher.php");
?>

<?php 
$id = $_GET['id'];
$query = "SELECT * FROM `hospital info` WHERE `Hospital_Id` = '$id'";
$res = mysqli_query($con, $query );
$row = mysqli_fetch_assoc($res);

print_r('$row');

?>

<div class="clearfix"></div>
   
 <div class="content-wrapper">
   <div class="container-fluid">
     <div class="col-lg-6">
       <div class="card">
          <div class="card-body">
          <div class="card-title">Edit Hospital Record</div>
          <hr>
           <form method="post">
          <div class="form-group">
           <label for="input-6">Hospital Name</label>
           <input type="text" required name="txtName" value="<?php echo $row['Hospital_Name']?>" class="form-control form-control-rounded" id="input-6" placeholder="Enter Hospital Name">
          </div>
          <div class="form-group">
           <label for="input-7">Hospital Email</label>
           <input type="text" required name="txtEmail" value="<?php echo $row['Hospital_Email']?>" class="form-control form-control-rounded" id="input-7" placeholder="Enter Hospital Email Address">
          </div>
          <div class="form-group">
           <label for="input-8">Hospital Password</label>
           <input type="password" required name="txtPass" value="<?php echo $row['Hospital_Password']?>" class="form-control form-control-rounded" id="input-8" placeholder="Enter Email Password">
          </div>
          <div class="form-group">
           <label for="input-9">Hospital P_Number</label>
           <input type="text" required name="txtPhone" value="<?php echo $row['Hospital_P_NO']?>" class="form-control form-control-rounded" id="input-9" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
           <label for="input-10">Hospital Address</label>
           <input type="text" required name="txtAdd" value="<?php echo $row['Hospital_Address']?>" class="form-control form-control-rounded" id="input-10" placeholder="Enter Hospital Address">
          </div>
          
          <div class="form-group">
           <button type="submit" name="btnSave" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Submit</button>
         </div>
         </form>
        </div>
        </div>
     </div>
   </div><!--End Row-->


<?php

if(isset($_POST['btnSave']))
{
    $na = $_POST['txtName'];
    $em = $_POST['txtEmail'];
    $pa = $_POST['txtPass'];
    $ph = $_POST['txtPhone'];
    $add = $_POST['txtAdd'];

    $query = "UPDATE `hospital info` SET `Hospital_Name`='$na',`Hospital_Email`='$em',`Hospital_Password`='$pa',`Hospital_P_NO`='$ph',`Hospital_Address`='$add' WHERE `Hospital_Id`='$id'";
    $res = mysqli_query($con, $query);

    if($res)
    {
        echo "<script>window.location.assign('showhospital.php')</script>";
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