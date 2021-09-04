<?php
session_start();
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    header("Location: .\logout.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./favicon_io/favicon.ico">
    <link href="style2.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Management</title>
    <style>
        .logout {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h3 class="">Welcome!</h3><strong style="font-size: 20px"><?php echo $name ?></strong>
    <div class="select">
        <h2 id="align">Products Management</h2>
        <div id="buttons">
            <a class="links" href="./product_insertform.php"><button class="button">Product Registration</button></a>
            <a class="links" href="./display.php"><button class="button">Display Records</button></a>
        </div>
        <div class="logout"><a href="../logout.php"><button class="btn btn-success">Log Out</button></a></div>

    </div>
</body>

</html>