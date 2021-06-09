<?php 
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$query = mysqli_query($conn,"select * from tbl_user") or die("Error :".mysqli_error($conn));

echo "<h2><center>User Record</center></h2>";
echo "<table border='1px' cellspacing = '0'cellpadding = '15' align='center'>";
echo "<tr>";
echo "<th>ID</th>   <th>Name</th>   <th>Gender</th> <th>Mobile</th> <th colspan='2'>Update</th>";
echo "</tr>";
while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>{$row['User_id']}</td>";
    echo "<td>{$row['User_name']}</td>";
    echo "<td>{$row['User_gender']}</td>";
    echo "<td>{$row['User_mobile']}</td>";
    echo "<td><a href='Delete_record.php?id={$row['User_id']}'>Delete</a></td>";
    echo "<td><a href='Edit_record.php?id={$row['User_id']}'>Edit</a></td>";
    echo "</tr>";
}
echo "<tr><td colspan = '6' style='text-align:center;'> <a href='insert_record.php'style = ' text-decoration:none; font-weight:bold; font-size:18px;'>Add Record</a></td></tr>";
echo "</table>";
?>