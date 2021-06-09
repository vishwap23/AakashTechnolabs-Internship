<?php 
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$query = mysqli_query($conn,"select * from student") or die("Error :".mysqli_error($conn));

echo "<h1 align='center' style='color:springgreen;'>Student Record</h1>";

echo "<table border='2px' width='959px' bgcolor='white' cellspacing='0' cellpadding='10px' align='center' style='text-align:center;color:black;'>";

echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>DOB</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
// echo "<th>Blood_Group</th>";
// echo "<th>Address</th>";
// echo "<th>Pincode</th>";
echo "<th>City</th>";
echo "<th colspan='2'>Update</th>";

while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td style='paddig-bottom:5px;'>{$row['ID']}</td>";
    echo "<td>{$row['Name']}</td>";
    echo "<td>{$row['Gender']}</td>";
    echo "<td>{$row['DOB']}</td>";
    echo "<td>{$row['Email']}</td>";
    echo "<td>{$row['Mobile']}</td>";
    // echo "<td>{$row['Blood_Group']}</td>";
    // echo "<td>{$row['Address']}</td>";
    // echo "<td>{$row['Pincode']}</td>";
    echo "<td>{$row['City']}</td>";
    echo "<td><a href='Delete_record.php?id={$row['ID']}'>Delete</a></td>";
    echo "<td><a href='Edit_record.php?id={$row['ID']}'>Edit</a></td>";
    echo "</tr>";
}

echo "</table>";
?>
<html>
    <head>

    </head>
</html>