<!-- Take values from user in checkbox and print as a string -->
<html>
<form method="post">
    <input type="checkbox" name="check[]" value="Apple">Apple<br>
    <input type="checkbox" name="check[]" value="Banana">Banana<br>
    <input type="checkbox" name="check[]" value="Cherry">Cherry<br>
    <input type="checkbox" name="check[]" value="Strawberry">Strawberry<br>
    <input type="checkbox" name="check[]" value="BlackBerry">BlackBerry<br>
    <input type="checkbox" name="check[]" value="Grapes">Grapes<br>
    <input type="checkbox" name="check[]" value="Orange">Orange<br>
    <input type="submit" name="submit" id="">
</form>
<?php 
if(isset($_POST['submit'])){
    $fruit = $_POST['check'];
    echo "<pre>";
    print_r($fruit);
    echo "</pre>";
    $str = implode(" ",$fruit);
    echo "Your Favourite fruits are : $str";
}
?>
</html>