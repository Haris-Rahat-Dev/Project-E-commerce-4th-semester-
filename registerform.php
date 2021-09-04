<?php
/*if (isset($_SESSION['name'])) {
    header("Location: ./template.php");
} else {
}
*/?><!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="./favicon_io/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style-form.css?v=<?php /*echo time(); */?>" type="text/css">
    <script src="https://kit.fontawesome.com/bde7c7e20a.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./app.js"></script>
</head>

<body>
    <div id="header">
        <div id="dt">
            <p id="time"></p>
            <p id="date"></p>
        </div>
    </div>
    <nav class="nvbar">
        <ul class="nlinks">
            <li id="nlogo"><a href="./template.php"><img src="./imgs/navlogo.png"></a></li>
            <li class="navbtns"><a href="./template.php"><i class="fa fa-home fa-lg"></i>Home</a></li>
            <li class="navbtns"><a href="#"><i class="fa fa-store fa-lg"></i>Store</a></li>
            <li class="navbtns"><a href="./template.php"><i class="fa fa-clipboard fa-lg"></i>About Us</a></li>
            <li class="navbtns"><a href="./template.php"><i class="fa fa-phone-alt fa-lg"></i>Contact Us</a></li>
            <li id="searchbox"><a href="#" class="scart"><i class="fa fa-shopping-cart fa-lg"></i></a></li>
            <li>
                <div class="search" onclick="opens()"><i class="fa fa-search fa-lg"></i>
                </div>
            </li>
        </ul>
        <div id="dropdown" class="sinput">
            <div id="adjust">
                <input type="search" class="dsearch" placeholder="Search" />
                <a href="#" class="cross" onclick="closes()"> &#10005</a>
            </div>
        </div>
    </nav>-->
<?php
include 'header.php';
?>
    <div class="center">
        <form action="" method="POST">
            <h3 style="text-align: center; padding-top:20px">Create Account</h3>
            <div class="div1">
                <div><label>First Name<span style="color: white;">*</span></label>
                    <br>
                    <input type="text" class="rinput" placeholder="First-Name" name="fname" autofocus>
                    <br>
                    <label>Last Name</label>
                    <br>
                    <input type="text" class="rinput" placeholder="Last-Name" name="lname">
                </div>
                <div>
                    <label>Email<span style="color: white;">*</span></label>
                    <br>
                    <input type="email" class="rinput" placeholder="harry@email.com" name="email">
                    <br>
                    <label>Password<span style="color: white;">*</span></label>
                    <br>
                    <input type="password" class="rinput" placeholder="Password" name="pwd">
                </div>
            </div>
            <div class="div2">
                <div>
                    <label>Enter Phone Number<span style="color: white;">*</span></label>
                    <br>
                    <input type="text" class="rinput" placeholder="0333-0000000" name="number">
                </div>
                <div>
                    <br>
                    <small>Birth:</small>
                    <input type="date" class="rinput" placholder="MM/DD/YYYY" name="birth">
                    <small>Gender</small>
                    <select class="rinput" name="gender">
                        <option>Choose..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div style="width:50%; margin:0 auto; padding:20px;">
                <input type="hidden" value="client" name="type">
                <div class="d-flex flex-column justify-content-center"><input type="submit" class="btn btn-lg" id="rsubmit" value="Sign Up!" name="submit"></div>
                <div><small>By clicking “SIGN UP”, I agree to Gaming Solution's <a href="#" style="color:black">Terms of Use</a> and <a href="#" style="color:black">Privacy Policy</a>.</small></div>
            </div>
        </form>
    </div>
<?php
include 'footer.php';
?>
<!--    <div id="footer">
        <div class="container">
            <div class="rows">
                <div>
                    <h4 class="headings">Categories</h4>
                    <ul class="flinks">
                        <li><a href="#">PCs</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Graphic Cards</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="headings">Help</h4>
                    <ul class="flinks">
                        <li><a href="">Track Order</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">Shipping</a></li>
                        <li><a href="">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="headings">Get in Touch</h4>
                    <div class="social">
                        <a href="#" class="fa fa-facebook fa-lg" style="padding:20px"></a>
                        <a href="#" class="fa fa-google fa-lg" style="padding:20px"></a>
                        <a href="#" class="fa fa-twitter fa-lg" style="padding:20px"></a>
                    </div>
                    <p class="break" style="color: whitesmoke;margin-bottom: 20%"> Any questions? Let us know!</p>
                </div>
                <div>
                    <h4 class="headings">NEWSLETTER</h4>
                    <form style="margin-top: 15px;">
                        <label style="color:whitesmoke">Enter your Email to hear from Us!</label>
                        <br>
                        <input class="round" id=regf type="text" placeholder="Hear From Us!" onfocus=" backgroundchange(this.id)">
                        <br>
                        <button class="btn btn-primary" style="margin-top: 6%;">SUBSCRIBE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>-->
<?php
if (isset($_POST['submit'])) {
    /*include('./login/database.php');*/
    include('./login/functions.inc.php');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
    $number = $_POST['number'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    if (emptyInputRegister($fname, $lname, $email, $password, $number, $birth, $gender) !== false) {
        ?>
        <script>
            alert('Fill All Fields!');
        </script>
            <?php
        /*echo "Fill all Fields!";*/
        exit();
    }
    if (invalidFname($fname) !== false) {
        ?>
        <script>
            alert('Enter a valid First Name!');
        </script>
        <!--echo "Enter a valid First Name!";-->
        <?php
        exit();
    }
    if (invalidLname($lname) !== false) {
        ?>
        <script>
            alert('Enter a valid Last Name!');
        </script>
        echo "Enter a valid Last Name!";
        <?php
        exit();
    }
    if (invalidEmail($email) !== false) {
        ?>
        <script>
            alert('Enter a Valid Email!');
        </script>
        <?php
        exit();
    }
    if(wrongemail($email)!==false)
    {
        ?>
        <script>
            alert('Enter a Valid Email!');
        </script>
        <?php
    }
    else
    {
        $qry = "INSERT INTO users (first_name,last_name, email, password,phoneno,birth,gender,type) VALUES ('" . $fname . "','" . $lname . "', '" . $email . "', '" . $passwordHashed . "', '" . $number . "', '" . $birth . "', '" . $gender . "','".$type."')";
        /*$db = new Database();*/
        if ($db->UDI($qry) == true) {
?>
            <script>
                window.location.href = 'template.php';
            </script>
<?php
        }
        else {
            ?>
            <script>
                alert('Error! Registration Failed!');
            </script>
<?php
        }
    }
}
?>