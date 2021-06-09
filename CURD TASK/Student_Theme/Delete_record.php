<?php 
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$query = mysqli_query($conn,"delete from student where id=$id") or die("Error :".mysqli_error($conn));
if($query){
    echo "<script>alert('Data Deleted Successfully');</script>";
    include 'Manage_record.php';
}