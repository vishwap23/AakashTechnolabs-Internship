<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="marksheet212.css">
    <title></title>
</head>

<body>
    <center>
        <h1>Student Details Form</h1>
    </center>
    <div class="container">
        <form action="result.php" method="post" enctype="multipart/form-data">
            <table cellpadding="10px" width="450px">
                <tr>
                    <td style="text-align: right;">Full Name :</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">seat No :</td>
                    <td><input type="number" name="seat" min="1" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Class :</td>
                    <td>
                        <input id="class" type="radio" name="class" value="A" required>A
                        <input id="class" type="radio" name="class" value="B" required>B<br>
                        <input id="class" type="radio" name="class" value="B" required>C
                        <input id="class" type="radio" name="class" value="B" required>D<br>
                        <input id="class" type="radio" name="class" value="B" required>E
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">DOB : </td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Exam Year :</td>
                    <td><input type="month" name="year" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">School Name :</td>
                    <td><input type="text" name="sname" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">School Index No :</td>
                    <td><input type="text" name="sindex" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Maths :</td>
                    <td><input type="number" name="maths" min="0" max="100" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Physics :</td>
                    <td><input type="number" name="phy" min="1" max="100" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">chemistry :</td>
                    <td><input type="number" name="chem" min="0" max="100" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">English :</td>
                    <td><input type="number"  name="eng" min="0" max="100" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Computer :</td>
                    <td><input type="number"  name="com" min="0" max="100" required></td>
                </tr>
                <tr>
                    <td style="text-align: right;">Passport Size Photo :</td>
                    <td><input type="file" name="photo"  required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <center><input type="submit" name="submit" id="submit"></center>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>