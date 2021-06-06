<html>
<body>
    <form method="post">
    <input type="text" placeholder="eneter 5 num separate it by space" name="ip">
    <input type="submit" name="btn">
    </form>
    <?php 
        if($_POST){
            $str = $_POST['ip'];
            $arr = explode(" ",$str);
            asort($arr);
            echo "Input Numbers in ascending order :<pre>";
            print_r($arr);
            echo "</pre>";

            echo "Sum : ".array_sum($arr)."<br><br>";
            echo "Product : ".array_product($arr);
        }
    ?>
</body>
</html>