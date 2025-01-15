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
     
   

      <div class="container">
       
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Show Hospital Record</h5>
              <a href="addhospital.php" class="btn btn-info btn-sm">Add New Record</a><br><br>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Hospital Id</th>
                      <th scope="col">Hospital Name</th>
                      <th scope="col">Hospital Email</th>
                      <th scope="col">Hospital Email Password</th>
                      <th scope="col">Hospital P_Number</th>
                      <th scope="col">Hospital Address</th>
                      <th scope="col" >Edit</th>
                      <th scope="col">Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM `hospital info`";
                    $res = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($res))
                    {
                        ?>

<tr>
                      <th scope="row"><?php echo $row['Hospital_Id']?></th>
                      <td><?php echo $row['Hospital_Name']?></td>
                      <td><?php echo $row['Hospital_Email']?></td>
                      <td><?php echo $row['Hospital_Password']?></td>
                      <td><?php echo $row['Hospital_P_NO']?></td>
                      <td><?php echo $row['Hospital_Address']?></td>
                      <td><a href="edit.php?id=<?php echo $row['Hospital_Id']?>" class="btn btn-warning ">Edit</a></td>
                      <td><a href="delete.php?id=<?php echo $row['Hospital_Id']?>" class="btn btn-danger ">Delete</a></td>
                      
                      
                    </tr>
                    <?php
                    }
                    
                    ?>
                   
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->


<?php
include_once("footer.php");

?>