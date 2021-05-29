<?php 
$a = 10;
$b = 20;



 // if-elseif-else
echo "a = $a and b = $b <br>";
 if($a==$b){
    echo "a is equal to b";
}
elseif($a<$b){
    echo "a is less than b";
}
elseif($a>$b){
    echo "a is greater than b";
}
else{
    echo "enter the valid values";
}

echo "<br><hr><br>";
echo " Month = ";
// switch

switch($a){
    case 1: echo "January";
            break;
    case 2: echo "February";
            break;
    case 3: echo "March";
            break;
    case 4: echo "April";
            break;
    case 5: echo "May";
            break;
    case 6: echo "June";
            break;
    case 7: echo "July";
            break;
    case 8: echo "August";
            break;
    case 9: echo "september";
            break;
    case 10: echo "october";
            break;
    case 11: echo "november";
            break;
    case 12: echo "december";
            break;        
    default: echo "enter number between 1 10 12";
            break;
}
?>