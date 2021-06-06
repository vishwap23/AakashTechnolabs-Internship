
<html>

<head>
    <title> Web Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style3.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <?php
        include  'header.php';
        include  'menu.php';
        ?>

        <div id="middle">
            <?php include 'slidebar.php'; 
                 include  'right.php';
            ?>

        </div>
<?php include 'footer.php';?>
    </div>
</body>

</html>