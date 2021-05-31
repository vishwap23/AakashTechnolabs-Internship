<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $seat = $_POST['seat'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $year = $_POST['year'];
    $sname = $_POST['sname'];
    $sindex = $_POST['sindex'];
    $maths = $_POST['maths'];
    $phy = $_POST['phy'];
    $chem = $_POST['chem'];
    $eng = $_POST['eng'];
    $com = $_POST['com'];
    if (isset($_FILES['photo'])) {
        $photo = $_FILES['photo'];
        // echo $photo['name'];
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
    }
}

function grade($sub)
{
    if ($sub >= 91) {
        return 'A1';
    } elseif ($sub > 80 && $sub < 91) {
        return 'A2';
    } elseif ($sub > 70 && $sub < 81) {
        return 'B1';
    } elseif ($sub > 60 && $sub < 71) {
        return 'B2';
    } elseif ($sub > 50 && $sub < 61) {
        return 'C1';
    } elseif ($sub > 40 && $sub < 51) {
        return 'C2';
    } elseif ($sub > 30 && $sub < 41) {
        return 'D';
    } else {
        return "<b style='color:red';>fail</b>";
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="display3.css"></link>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<body>

    <div class="container">
        <div class="sub">
        <table cellspacing="0"  class="tbl1" cellpadding="5px">
            <tr>
                <td><b style="letter-spacing:1px;font-size: 20; font-weight:bolder;color:blue;"><i>Gujarat Secondary and Higher secondary Education Board,Gandhinagar</i></b></td>
                
            </tr>
            
        </table>
        <table border="1" class="tbl2" cellspacing="0" cellpadding= "10px">
            <tr>
            <td><?php 
                $pic = $photo['name']; 
                echo "<img src='$pic' height='130px' width='130px'>";
                ?></td>
                <td>
                    <?php echo  "<b>$name</b>"; ?><br><br>
                    <?php echo "Seat no : <b>$class-$seat</b>"; ?><br><br>
                    <?php echo "DOB : <b>$dob</b>"; ?>
            
            </td>
                
            </tr>
            <tr>
                <td><?php echo  "<b>$sname</b><br><br>School Index No : <b>$sindex</b>"; ?></td>
                <td><?php echo "Exam Year : <b>$year</b>" ?></td>
            </tr>
        </table>
        <table border="1"class="tabl3" cellspacing="0" cellpadding= "5px">
            <tr>
                <th style="width: 30px;">Subject</th>
                <th style="width: 70px;">Out of mark</th>
                <th>Marks you get</td>
                <th style="width: 160px;">Grade</th>
            </tr>
            <tr>
                
                <td style="text-align: left; padding-left:25px;">01 Maths</td>
                <td>100</td>
                <td><?php echo $maths; ?></td>
                <td><?php $grd = grade($maths);
                    echo $grd; ?></td>
            </tr>
            <tr>
                
                <td style="text-align: left; padding-left:25px;">02 Physics</td>
                <td>100</td>
                <td><?php echo $phy; ?></td>
                <td><?php $grd = grade($phy);
                    echo $grd; ?></td>
            </tr>
            <tr>
                <td style="text-align: left; padding-left:25px;">03 Chemistry</td>
                <td>100</td>
                <td><?php echo $chem; ?></td>
                <td><?php $grd = grade($chem);
                    echo $grd; ?></td>
            </tr>
            <tr>
                
                <td style="text-align: left; padding-left:25px;">07 Computer</td>
                <td>100</td>
                <td><?php echo $com; ?></td>
                <td><?php $grd = grade($com);
                    echo $grd; ?></td>
            </tr>
            <tr>
                
                <td style="text-align: left; padding-left:25px;">11 English</td>
                <td>100</td>
                <td><?php echo $eng; ?></td>
                <td><?php $grd = grade($eng);
                    echo $grd; ?></td>
            </tr>
            <tr>
            
                <td style="text-align: left; padding-left:25px;"></td>
                <td>500</td>
                <td>
                    <?php $total = $maths + $phy + $chem + $com + $eng;
                    echo "<b>Total Marks : $total</b>";
                    $avg = $total/5;
                    $g=grade($avg);
                    ?></td>
                    <td><?php echo "<b>Overall Grade : $g</b>";?></td>
            </tr>
            <tr>
                
                <!-- <td></td> -->
            </tr>
        </table>
        </div>
    </div>
</body>

</html>