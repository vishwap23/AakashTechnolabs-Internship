<html>

<head>
    <title> Web Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"  href="style1234.css">
</head>

<body>
    <div id="wrapper">
        <?php
        include  'header.php';
        include  'menu.php';
        ?>
        <div id="middle">
            <?php include 'slidebar.php'; ?>
             <div id="right">
                <div class="test"><h3>Register Student</h3></div>
                <div class="Form">
                    <?php  include 'Student Registration Form.php';?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>