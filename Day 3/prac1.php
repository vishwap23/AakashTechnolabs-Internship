<?php 
//for loop --> entry control loop
echo "<table border='1'>";
for($i=0;$i<10;$i++){
    if($i%2==0){
        echo "<tr><td bgcolor='pink'>$i</td></tr>";
    }
    else{
        echo "<tr><td bgcolor='cyan'>$i</td></tr>";
    }
};
echo "</table>";

echo "<br><hr><br>";

// while loop --> entery control loop
$i=1;
while($i<11){
    $j=196;
    echo "$j x $i = <b>".$i*$j."</b><br>";
    $i++;
}
echo "<br><hr><br>";

// do while loop --> exit control loop
$a=10;
do{
    echo "value of a = $a <br>";
    $a++;
}while($a<5)
?>