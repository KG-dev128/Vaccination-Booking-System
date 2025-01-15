<?php
include_once("header.php");
?>
<?php
include_once("sidebar.php");
?>
<?php
include_once("colorswitcher.php");
?>

<div class="clearfix"></div>
   
 <div class="content-wrapper">
   <div class="container-fluid">
     <div class="col-lg-6">
       <div class="card">
          <div class="card-body">
          <div class="card-title"> Vaccination Record</div>
          <hr>
           <form method="post">
          <div class="form-group">
           <label for="input-6">Select Hospital Name</label>
           <select name="txtHos" class="form-control boxed">
                                                <option value="">Select Hospital</option>
                                                <?php

                                                    $query = "SELECT Hospital_Id, Hospital_Name FROM `hospital info` ";
                                                    $res = mysqli_query($con, $query);
                                                    while($row = mysqli_fetch_assoc($res))
                                                    { ?>

                                                        <option value="<?php echo $row['Hospital_Name'] ?>"><?php echo $row['Hospital_Name'] ?></option>

                                                   <?php }
                                                
                                                ?>
                                            </select>
          </div>
          <div class="form-group">
           <label for="input-6">Select Vaccination Name</label>
           <select name="txtVac" class="form-control boxed">
                                                <option value="">Select Vaciantion</option>
                                                <?php

                                                    $query = "SELECT `vaccination_id`, `vaccination_name` FROM `vaccination_info`";
                                                    $res = mysqli_query($con, $query);
                                                    while($row = mysqli_fetch_assoc($res))
                                                    { ?>

                                                        <option value="<?php echo $row['vaccination_name'] ?>"><?php echo $row['vaccination_name'] ?></option>

                                                   <?php }
                                                
                                                ?>
                                            </select>
          </div>
          <div class="form-group">
                                            <label class="control-label">Enter Qty</label>
                                            <input type="number" min="1" max="100" required name="txtQty" class="form-control boxed">
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
    $hos = $_POST['txtHos'];
    $vac = $_POST['txtVac'];
    $qty = $_POST['txtQty'];
    

    $query = "INSERT INTO `allocation_info`(`hospital_name`, `vaccine_name`, `vaccine_qty`) VALUES ('$hos','$vac','$qty')";
    $res = mysqli_query($con, $query);

    if($res)
    {
        echo "<script>window.location.assign('index.php')</script>";
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