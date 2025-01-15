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
            <h5 class="card-title">Reject Child Request</h5>
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Child Id</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Child D.O.B</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Vaccine Name</th>
                    <th scope="col">Vaccine Timing</th>

                    <th scope="col">Vaccination Status</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM `user` ";
                  $res = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_assoc($res)) {
                    if (isset($row['status']) && $row['status'] == "reject") {
                  ?>

                      <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['child_name'] ?></td>
                        <td><?php echo $row['child_dob'] ?></td>
                        <td><?php echo $row['hospitalname'] ?></td>
                        <td><?php echo $row['vaccine name'] ?></td>
                        <td><?php echo $row['vaccine time'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                       







                      </tr>
                  <?php
                    }
                  }

                  ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!--End Row-->

    <!-- <?php
          $qty = $row['vaccination_qty'];
          if ($qty > 0) {
            echo "<td class='text-info'>Approved</td>";
          } else {
            echo "<td class='text-danger'>Reject</td>";
          }
          ?> -->




    <?php
    include_once("footer.php");

    ?>