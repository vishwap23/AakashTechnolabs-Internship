<?php 
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$q = mysqli_query($conn,"select * from student") or die("Error :".mysqli_error($conn));
$row = mysqli_fetch_row($q);  //**fetch data as numerical array */

// Debug
echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>$row[0] $row[1] $row[2]";

// returns numerical and assiciative both array

$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo "</pre>";

echo "$row[ID]  $row[Name] $row[3]";
?>