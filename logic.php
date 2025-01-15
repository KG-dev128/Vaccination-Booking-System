<?php
include_once("./connection.php");
if (isset($_GET["status"])) {
    $status = $_GET["status"];
    $id = $_GET["id"];
    $updateStatus = "UPDATE `user` SET status='$status' where id='$id'";
    $result = mysqli_query($con, $updateStatus);
    if ($result) {
        echo "<script>location.href='./childdetail.php'</script>";
    }
}
