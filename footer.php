<button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>
<section id="contact">
<footer id="footer">
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
                    <input class="round2" id="finput" type="text" placeholder="Hear From Us!" onfocus="backgroundchange(this.id)">
                    <br>
                    <button class="btn btn-danger" style="margin-top: 6%;">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</footer>
</section>
<script type="text/javascript" src="./app.js"></script>

<?php
if (isset($_POST['login'])) {
    /*include("./login/database.php");*/
    include("./login/userclass.php");
    include("./login/functions.inc.php");
    $email = $_POST['uemail'];
    $password = $_POST['pwd'];
    /*$db = new Database();*/
    $qry = "SELECT password FROM users where email='" . $email . "'";
    $rows = $db->Search($qry, users::class);
    if ($rows != null) {
        $row = $rows['0'];
        $hashPassword = $row->getPassword();
        $verify = password_verify($password, $hashPassword);
    }
    if ($verify) {
        $qry = "SELECT * FROM users where email='" . $email . "'and password='" . $hashPassword . "'";
        $rows = $db->Search($qry, users::class);
        if ($rows != null) {
            $row = $rows['0'];
            $_SESSION['name'] = $row->getFirstName();
            $_SESSION['id']=$row->getCId();
            $user = $row->getEmail();
            $mail = explode("@", $user);
            $domain = end($mail);
            if ($domain == "admin.com") {
                ?>
                <script>
                    window.location.href = "./login/admin/admin.php";
                </script>
                <?php
            } else if ($domain == "gsolutions.com") {
                ?>
                <script>
                    window.location.href = "./login/manager/manager.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    window.location.href = "template.php";
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert("Please Sign Up!")
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Wrong Email or Password!")
        </script>
        <?php
    }
}
?>
</body>
</html>
