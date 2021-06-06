<?php
$arr = array('A', 'B', 'C', 'D');
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<html>

<body>
<form method="post">
    <input type="Submit" name="go" value="Shuffle">
    </form>
</body>

</html>
<?php 
if ($_POST) {
    shuffle($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
?>