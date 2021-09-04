<?php
session_start();
if (isset($_SESSION['name'])) {
    $name=$_SESSION['name'];

} else {
    header("Location: ../logout.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="./favicon_io/favicon.ico">
    <link href="style.css?v=<?php echo time();?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container panel">
         <h2>Welcome!</h2><strong style="font-size: 20px"><?php echo $name ?></strong>
         <div class="admin-panel">
             <a href="./registeradmin.php" class="btns"><button class="btn">Register Admin</button></a>
             <a href="./registermanager.php" class="btns"><button class="btn">Register Manager</button></a>
             <a href="./viewusers.php" class="btns"><button class="btn">View Users</button></a>
             <a href="../logout.php"><button class="logout btn-success">LOG OUT</button></a>
         </div>
     </div>
</body>
</html>

