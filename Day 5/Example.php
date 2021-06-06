<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Array Functions</title>
</head>

<body>
    <form method="post">
        <lable>Programming Languages :</lable><br>
        <input type="checkbox" name="cbox[]" value="C">C<br>
        <input type="checkbox" name="cbox[]" value="C++">C++<br>
        <input type="checkbox" name="cbox[]" value="PYTHON">PYTHON<br>
        <input type="checkbox" name="cbox[]" value="JAVA">JAVA<br>
        <input type="checkbox" name="cbox[]" value="PHP">PHP<br>
        <input type="submit" name="submit">
    </form>
</body>
<?php
    if($_POST){
        $language = $_POST['cbox'];
        $str = implode(" ",$language);
        echo "Languages known : $str";
    }
?>
</html>