<?php


?>
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
              <h5 class="card-title">Vaccine Record</h5>
              
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Hospital Name</th>
                      <th scope="col">Vaccine Name</th>
                      <th scope="col">Vaccine Quantityntity</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM `allocation_info`";
                    $res = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($res))
                    {
                        ?>

<tr>
                      <th scope="row"><?php echo $row['allocation_id']?></th>
                      <td><?php echo $row['hospital_name']?></td>
                      <td><?php echo $row['vaccine_name']?></td>
                      <td><?php echo $row['vaccine_qty']?></td>
                      
                      
                      
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