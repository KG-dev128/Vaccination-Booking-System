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

$query = "SELECT * FROM `vaccination_info` WHERE `vaccination_id` = '$id'";
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
          <div class="card-title">Add Vaccination Record</div>
          <hr>
           <form method="post">
          <div class="form-group">
           <label for="input-6">Enter Vaccination Name</label>
           <input type="text" value="<?php echo $row['vaccination_name'] ?>" required name="txtName" class="form-control form-control-rounded" id="input-6" placeholder="Enter Vaccination Name">
          </div>
          <div class="form-group">
           <label for="input-7">Enter Vaccination Qty</label>
           <input type="number" value="<?php echo $row['vaccination_qty'] ?>" min="50" required name="txtEmail" class="form-control form-control-rounded" id="input-7" placeholder="Enter Vaccination Quantity">
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
    

    $query = "UPDATE `vaccination_info` SET `vaccination_name`='$na',`vaccination_qty`='$em' WHERE `vaccination_id`= '$id'";
    
    $res = mysqli_query($con, $query);

    if($res)
    {
        echo "<script>window.location.assign('showvaccination.php')</script>";
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