<?php
// marksheet
$math = 10;
$phy = 8;
$chem = 9;
$eng = 8;
$com = 8;
echo "<table border='1px' cellspacing='0' cellpadding='20px'>";
echo "<tr><th>Subject Name</th><th>Marks</th></tr>";
echo "<tr><td>Maths</td><td>$math</td></tr>";
echo "<tr><td>Physics</td><td>$phy</td></tr>";
echo "<tr><td>Chemistry</td><td>$chem</td></tr>";
echo "<tr><td>English</td><td>$eng</td></tr>";
echo "<tr><td>Computer</td><td>$com</td></tr>";
echo "</table>";
echo "<br>Your grade is ";
$avg = ($math + $chem + $phy + $eng + $com) / 5;
// echo = 
switch ($avg) {
    case ($avg > 90):
        echo "A1";
        break;
    case (81 <= $avg && $avg < 91):
        echo "A2";
        break;
    case (71 <= $avg && $avg  < 81):
        echo "A3";
        break;
    case (61 <= $avg && $avg < 71):
        echo "A4";
        break;
    case (51 <= $avg && $avg < 61):
        echo "A5";
        break;
    case (41 <= $avg && $avg < 51):
        echo "A6";
        break;
    case (31 <= $avg && $avg < 41):
        echo "A7";
        break;
    case (0 <= $avg && $avg < 30):
        echo "<b style='color:red;'>Better Try Next time";
        break;
    default:
        echo "$avg not valid";
        break;
}
echo "<br><br>";
