<?php
$id = $_GET['id'];
if(!isset($_GET['id'])){
    // header("location:3-Edit_record.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'internship') or  die("Error :" . mysqli_error($conn));
$query =  mysqli_query($conn, "select * from tbl_user where User_id = $id") or die("Error :" . mysqli_error($conn));
$row = mysqli_fetch_array($query) or die("Error :" . mysqli_error($conn));
// print_r($row);

if($_POST){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mob = $_POST['mob'];
    // $connection = 
    $edit = mysqli_query($conn,"update tbl_user set User_name = '{$name}' ,User_gender = '{$gender}',User_mobile = '{$mob}' where User_id = $id") or die("Error ".mysqli_error($conn));
    if($edit){
        echo "<script>alert('Data Updated Successfully!');window.location.replace('Display_record.php');</script>";
    }
    // header('Display_record.php');
}
?>
<html>
<body>
    <form method="post">
        <table border="1" cellspacing = '0' cellpadding= '10'>
            <tr>
                <td>ID</td>
                <td><input type="number" name="id" min="1" value="<?php echo $row['User_id']; ?>" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $row['User_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Female" <?php  if($row['User_gender']=='Female'){echo 'checked';}?> > Female
                    <input type="radio" name="gender" value="Male" <?php  if($row['User_gender']=='Male'){echo 'checked';}?>> Male
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mob" value="<?php echo $row['User_mobile']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit"  name="submit" value="Edit"></td> 
            </tr>
        </table>
    </form>
</body>

</html>