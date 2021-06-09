<?php
$conn =  mysqli_connect('localhost', 'root', '', 'internship');
$q = mysqli_query(
    $conn,
    "INSERT INTO tbl_User(User_id, User_name, User_gender, User_mobile) VALUES (2,'Vini','female',1234567890)") or die("Error : " . mysqli_error($conn));
if ($q) {
    echo "<script>alert('User added');</script>";
}
