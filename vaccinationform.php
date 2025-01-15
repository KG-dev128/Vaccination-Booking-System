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
                    <div class="card-title"> Vaccination Form</div>
                    <hr>
                    <form method="post">
                        <div class="form-group">
                            <label for="input-6">Child Name</label>
                            <input type="text" required name="txtName" class="form-control form-control-rounded" id="input-6" placeholder="Enter Child Name">
                        </div>
                        <div class="form-group">
                            <label for="input-6">Child D.O.B</label>
                            <input type="date" required name="txtdob" class="form-control form-control-rounded" id="input-6" placeholder="Enter Child Name">
                        </div>

                        <div class="form-group">
                            <label for="input-6">Select Hospital Name</label>
                            <select name="txtHos" class="form-control boxed">
                                <option value="">Select Hospital</option>
                                <?php

                                $query = "SELECT Hospital_Id, Hospital_Name FROM `hospital info` ";
                                $res = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_assoc($res)) { ?>

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
                                while ($row = mysqli_fetch_assoc($res)) { ?>

                                    <option value="<?php echo $row['vaccination_name'] ?>"><?php echo $row['vaccination_name'] ?></option>

                                <?php }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input-6">Select Time</label>
                            <input type="time" required name="txttime" class="form-control form-control-rounded" id="input-6" placeholder="Enter Child Name">
                            <small>hospital hours are 9am to 6pm</small>

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

    if (isset($_POST['btnSave'])) {
        $nam = $_POST['txtName'];
        $dob = $_POST['txtdob'];
        $hos = $_POST['txtHos'];
        $vac = $_POST['txtVac'];
        $time = $_POST['txttime'];



        $query = "INSERT INTO `user`(`child_name`, `child_dob`, `hospitalname`, `vaccine name`, `vaccine time`)
         VALUES ('$nam','$dob','$hos','$vac','$time')";
        $res = mysqli_query($con, $query);

        if ($res) {
            echo "<script>window.location.assign('childdetail.php')</script>";
        } else {
            echo "<script>alert('Please Enter Valid Data....')</script>";
        }
    }

    ?>