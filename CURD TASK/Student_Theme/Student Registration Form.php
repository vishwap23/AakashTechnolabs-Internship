<?php 
    if($_POST){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $blood = $_POST['group'];
        $add =$_POST['add'];
        $pin = $_POST['pin'];
        $city = $_POST['city'];

        $conn = mysqli_connect('localhost','root','','internship');
        $query = mysqli_query($conn,"insert into student(ID,Name,Gender,DOB,Email,Mobile,Blood_Group,Address,Pincode,City) values('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$mob}','{$blood}','{$add}','{$pin}','{$city}')") or die("Error : ".mysqli_error($conn));
        echo "<script>alert('Data Inserted Sucessfully')</script>";
    }
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="Student Registration Form.css">    -->
    <link href="style1234.css" rel="stylesheet" type="text/css" /> 
    <link href="New CSS.css" rel="stylesheet" type="text/css" /> 
</head>
    <body>
            <form method="post">
                <table  cellpadding="10px">
                    <tr>
                        <th>Id :</th><td><input type="number" name="id" min="1" required></td>
                    </tr>
                    <tr>
                        <th>Name :</th><td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <th>Gender :</th><td>
                            <input class="gender" type="radio" name="gender" value="Female" required> Female
                            <input class="gender" type="radio" name="gender" value="Male"> Male
                        </td>
                    </tr>
                    <tr>
                        <th>DOB :</th><td><input type="date" name="dob" required></td>
                    </tr>
                    <tr>
                        <th>Email :</th><td><input type="Email" name="email" required></td>
                    </tr>
                    <tr>
                        <th>Mobile :</th><td><input type="text" name="mob"  minlength="10" required></td>
                    </tr>
                    <tr>
                        <th>Blood Group :</th><td><input type="text" name="group" required></td>
                    </tr>
                    <tr>
                        <th>Address :</th><td><textarea name="add"  cols="26" rows="3" required></textarea></td>
                    </tr>
                    <tr>
                        <th>Pincode :</th><td><input type="number"  name="pin"  required></td>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <td>
                            <select name="city" id="city" required>
                                <option value="Valsad">valsad</option>
                                <option value="Ahemdabad">Ahemdabad</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Surat">Surat</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                                <option value="Vadodara">Vadodara</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="Submit">
                        <input type="reset" name="reset" id="reset" value="Reset"></td>       
                    </tr>
                </table>
            </form>
    </body>
</html>