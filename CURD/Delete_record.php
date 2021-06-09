<?php 
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$query = mysqli_query($conn,"delete from tbl_user where User_id = $id") or die("Error ".mysqli_error($conn));
if($query){
    echo "<script>alert('Data Deleted Successfully');window.location.replace('Display_record.php');</script>";
}

