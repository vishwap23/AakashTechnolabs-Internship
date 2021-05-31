<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="registration form.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container" border="1">
    <form action="display.php" method="post">
        <table cellspacing="0" cellpadding="15px"width="400px">
            <tr>
                <td style="text-align: right;">Name :</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td style="text-align: right;">Birth Date :</td>
                <td><input type="date" name="dob" required></td>
            </tr>
            <tr>
                <td style="text-align: right;">Gender :</td>
                <td><input id="gender" type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" id="gender" value="Male" required> Male</td>
            </tr>
            <tr>
                <td style="text-align: right;">Age :</td>
                <td><input type="number" min = "1" max = "100" name="age" required></td>
            </tr>
            <tr>
                <td style="text-align: right;">Email :</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td style="text-align: right;">Mobile No :</td>
                <td><input type="text" name="mob" required></td>
            </tr>
            <tr>
                <td style="text-align: right;font-weight: 500;">Aadhar No :</td>
                <td><input type="text" name="aadhar" required></td>
            </tr>
            <tr>
                <td style="text-align: right;">Address :</td>
                <td><textarea name="add" cols="30" rows="4" required></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit" id="btn1"></td>
                <td><input type="reset" name="reset" id="btn2"></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>