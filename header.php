<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
?>
<?php
include './login/database.php';
include 'cartclass.php';
/*$db=new Database();
$qry="SELECT COUNT(id) FROM cart";
$rows=$db->count($qry);
if($rows->num_rows > 0){
while ($row = $rows->fetch_assoc()){

}
}*/
$db=new Database();
$qry="SELECT id FROM cart";
$rows = $db->rows($qry);
if($rows!=null)
{
    $count=$rows;
}
else
{
    $count=" ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Solutions</title>
    <link rel="icon" href="./favicon_io/favicon.ico">
    <link rel="stylesheet" href="./style.css?v=<?php echo time();?> type="text/css">
    <script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
<section id="home">
    <div id="header">
        <div id="dt">
            <p id="time"></p>
            <p id="date"></p>
        </div>
    </div>
</section>
<nav class="nvbar">
    <ul class="nlinks">
        <?php if (isset($_SESSION['name'])) {
            ?>
            <li class="door"><a href="login/logout.php">Logout<i class="fa fa-sign-out fa-lg" style="cursor:pointer;"></i></a></li>
            <?php
        } else {
            ?>
            <li class="door"><a href="#" onclick="openNav()">Login
                    <i class="fa fa-sign-in-alt fa-lg"></i>
                </a></li>
            <?php
        }
        ?>
        <li id="nlogo"><a href="template.php"><img src="./imgs/navlogo.png"></a></li>
        <li class="navbtns"><a href="template.php" class="links"><i class="fa fa-home fa-lg"></i>Home</a></li>
        <li class="navbtns"><a href="store.php"><i class="fa fa-store fa-lg"></i>Store</a></li>
        <li class="navbtns"><a href="#aboutus" class="links"><i class="fa fa-clipboard fa-lg"></i>About Us</a></li>
        <li class="navbtns"><a href="#contact" class="links"><i class="fa fa-phone-alt fa-lg"></i>Contact Us</a></li>
        <li id="searchbox"><a href="cart.php" class="scart text-decoration-none"><i class="fa fa-shopping-cart fa-lg"></i>
                <?php
                if(isset($_SESSION['name']))
                {
                    ?>
                <sup class="px-1 text-danger fs-6"><?php echo $count?></sup></a>
                 <?php
                }
                else
                {
                    ?>
                    <sup class="px-1 text-danger fs-6"></sup></a>
                 <?php
                }
                ?>
        </li>
        <li>
            <div class="search" onclick="opens()"><i class="fa fa-search fa-lg"></i></div>
        </li>
    </ul>
    <div id="dropdown" class="sinput">
        <div id="adjust">
            <input type="search" class="dsearch" id="search" onchange="lowercase()" placeholder="Search" />
            <a href="#" class="cross" onclick="closes()"> &#10005</a>
        </div>
    </div>
</nav>
<div id="myNav" class="overlay">
    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <h2 style="color:#dc2430">Sign In</h2>
        <form class="form" action="" method="POST">
            <label class="flabel"><i class="fa fa-envelope fa-lg"></i>Email</label>
            <br>
            <input type="email" class="finput" id="uicon" placeholder="Email" name="uemail">
            <br>
            <label class="flabel"><i class="fa fa-lock fa-lg"></i>Password</label>
            <br>
            <input type="password" class="finput" id="picon" placeholder="Password" name="pwd">
            <br>
            <center><input type="submit" class="btn btn-block" id="submit" value="LOGIN" name="login" style="width:50%;"></center>
            <br>
            <a href="#" target="_blank"><button class="btn btn-link" style="padding-top:-20px">Forgot Password?</button></a>
        </form>
        <a href="./registerform.php" target="_blank" id="signup" style="margin-top:-30px"><button class="btn btn-link">Dont have an account? Sign Up Here!</button></a>
    </div>
</div>

