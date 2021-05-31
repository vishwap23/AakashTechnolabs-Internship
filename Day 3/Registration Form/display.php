<?php
    $name=$_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email =$_POST['email'];
    $mob = $_POST['mob'];
    $adhar = $_POST['aadhar'];
    $add = $_POST['add'];
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="registration form_display.css">
    </head>
    <body>
<div class="container">
    <form action="display.php" method="post">
        <table  cellspacing="0" cellpadding="15px"width="400px">
            <tr>
                <td style="text-align: right;">Name :</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Birth Date :</td>
                <td><?php echo $dob ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Gender :</td>
                <td><?php echo $gender ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Age :</td>
                <td><?php echo $age ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Email :</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Mobile No :</td>
                <td><?php echo $mob ?></td>
            </tr>
            <tr>
                <td style="text-align: right;font-weight: 500;">Aadhar No :</td>
                <td><?php echo $adhar ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Address :</td>
                <td><?php echo $add ?></td>
            </tr>
        </table>
        <div><?php echo "<b style='color:green'>Congratulations !! You have registered successfully.</b>";?></div>
        </body>
</html>