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
              <h5 class="card-title">Show Vaccination Record</h5>
              <a href="addvaccination.php" class="btn btn-info btn-sm">Add New Record</a><br><br>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Vaccination Id</th>
                      <th scope="col">Vaccination Name</th>
                      <th scope="col">Vaccination Qty</th>
                      
                      <th scope="col">Vaccination Status</th>
                      <th scope="col" >Edit</th>
                      <th scope="col">Delete</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM `vaccination_info` ";
                    $res = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_assoc($res))
                    {
                        ?>

<tr>
                      <th scope="row"><?php echo $row['vaccination_id']?></th>
                      <td><?php echo $row['vaccination_name']?></td>
                      <td><?php echo $row['vaccination_qty']?></td>
                     
                      <?php 
                                                        $qty = $row['vaccination_qty']; 
                                                        if($qty>0)
                                                        {
                                                            echo "<td class='text-info'>Available</td>";
                                                        }
                                                        else 
                                                        {
                                                            echo "<td class='text-danger'>Not Available</td>";
                                                        }
                                                    ?>


                      <td><a href="editvacc.php?id=<?php echo $row['vaccination_id']?>" class="btn btn-warning ">Edit</a></td>
                      <td><a href="deletevacc.php?id=<?php echo $row['vaccination_id']?>" class="btn btn-danger ">Delete</a></td>
                      
                      
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