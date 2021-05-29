<?php
// leap year
$year = 29004;
if ($year % 2 == 0) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
echo "<br><br><hr><br>";

// palindrome

$str = "hello";
function check($str)
{
    $reverse = strrev($str);
    if ($str == $reverse) {
        echo "$str is palindrome<br><br>";
    } else {
        echo "$str is not palindome<br><br>";
    }
}
check($str);
check(121);

