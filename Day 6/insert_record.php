<?php
$conn =  mysqli_connect('localhost', 'root', '', 'internship') or die("Error : " . mysqli_errno($conn));
if ($_POST) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mob = $_POST['mob'];
    $id = $_POST['id'];
    $q = mysqli_query($conn, "insert into tbl_User(User_id,User_name, User_gender, User_mobile) values('{$id}','{$name}','{$gender}','{$mob}' )") or die("Error : " . mysqli_error($conn));
    echo '<script>alert("Data inserted Successfully!")</script>';
}
?>

<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="design.css">
    </head>
<body>
    <h3 align="center">Enter Details to insert Record</h3>
    <form method="post">
        <div class="container">
            <table  cellpadding="9px">
                <tr>
                    <td style="width: 130px; text-align: center;">ID :</td>
                    <td><input type="number" name="id" min="1" required></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Name :</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Gender : </td>
                    <td><input type="radio" name="gender" value="Female" required> Female
                        <input type="radio" name="gender" value="Male"> Male
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">Mobile No :</td>
                    <td><input type="text" name="mob" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" name="submit" id="sub" value="Submit"> </td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>