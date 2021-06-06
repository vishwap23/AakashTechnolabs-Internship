
<html>
<body>
    <form method="post">
    <input type="text" name="input" placeholder="Enter an Alphabet">
    <input type="Submit" name="go" value="Go">
    </form>
</body>
</html>

<?php 
$arr = array(
    'A' => 'Apple',
    'B' => 'Bat',
    'C' => 'Cat',
    'D' => 'Dog',
    'E' => 'Elephant',
    'F' => 'Fan'
);
if($_POST['go']){
    $ip = $_POST['input'];
}
if(array_key_exists($ip,$arr)==true){
    echo "value at key  '$ip' is '$arr[$ip]'";
}
?>