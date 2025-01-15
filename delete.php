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
$query = "DELETE FROM `hospital info` WHERE `Hospital_Id` = '$id'";
$res = mysqli_query($con, $query);
if($res)
{
    echo "<script>window.location.assign('showhospital.php')</script>";
}
else
{
    echo"<script>alert('Please Enter Valid Data..')</script>";
}
?>
<?php
include_once("footer.php");

?>