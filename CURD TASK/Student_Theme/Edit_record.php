<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','internship') or die("Error".mysqli_error($conn));
$query = mysqli_query($conn,"select * from student where id = $id") or die("Error :".mysqli_error($conn));
$row = mysqli_fetch_array($query) or die("Error : ".mysqli_error($conn));
// echo "<pre>";
// print_r($row);
// echo "</pre>";

if($_POST){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $city = $_POST['city'];
    
    $add = $_POST['add'];
    $bld = $_POST['bld'];
    $pin = $_POST['pin'];

    $edit = mysqli_query($conn,"update student set  Name = '{$name}' , Gender = '{$gender}', DOB = '{$dob}', Email = '{$email}' ,Mobile = '{$mob}', Blood_Group = '{$bld}' ,Address = '{$add}' ,Pincode = '{$pin}', City = '{$city}'  where ID = $id ") or die("Error : ".mysqli_error($conn));
    if($edit){
        echo "<script>alert('Data Updated Successfully');window.location.replace('Manage_record.php');</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="number" name="id" min='1' value='<?php echo $row['ID'];?>'></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" <?php if($row['Gender'] == 'Female'){ echo 'checked'; }?> value="Female"> Female
                        <input type="radio" name="gender" <?php if($row['Gender'] == 'Male'){ echo 'checked';  }?> value="Male"> Male
                    </td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="dob" value="<?php echo $row['DOB']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $row['Email'];?>"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mob" value="<?php echo $row['Mobile']; ?>"></td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td><input type="text" name='bld' value="<?php echo $row['Blood_Group']; ?>"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="add" cols="30" rows="10" placeholder="<?php echo $row['Address']; ?>"></textarea></td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td><input type="number" name="pin" value="<?php echo $row['Pincode']; ?>"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" value="<?php echo $row['City']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Edit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>