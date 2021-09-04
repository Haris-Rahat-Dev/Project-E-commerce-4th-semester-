<?php
session_start();
if(isset($_SESSION['name']))
{

}
else{
    header('Location: ../logout.php');
}
?>
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
</head>
<body>
<h2 class="h2 my-5 text-center">Register New Admin</h2>
<div class="container p-4 rform">
    <form class="container text-white" action="" method="post">
        <div class="row">
            <div class="col col-lg-6 col-md-12 col-sm-12">
                <label class="form-label text-start">First Name<span style="color:white">*</span></label>
                <input class="form-control" type="text" placeholder="e.g Haris" name="fname">
                <label class="form-label">Last Name<span style="color:white">*</span></label>
                <input class="form-control" type="text" placeholder="e.g Rahat" name="lname">
                <label class="form-label">Phone Number<span style="color:white">*</span></label>
                <input class="form-control"  type="text" placeholder="e.g 03335978754" name="pnumber">
                <label class="form-label">Date of Birth<span style="color:white">*</span></label>
                <input class="form-control"  type="date" name="dob">
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12">
                <label class="form-label">Gender<span style="color:white">*</span></label>
                <br>
                <select class="form-select mb-2" name="gender" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <br>
                <label class="form-label">Assign Email<span style="color:white">*</span></label>
                <input class="form-control"  type="email" placeholder="e.g haris@admin.com" name="email">
                <label class="form-label">Password<span style="color:white">*</span></label>
                <input class="form-control"  type="password" placeholder="Password" name="password">
                <label class="form-label">Confirm Password<span style="color:white">*</span></label>
                <input class="form-control"  type="password" placeholder="Confirm Password" name="cpassword">
            </div>
        </div>
        <div class="submit">
            <input type="hidden" value="admin" name="type">
            <input class="btn btn-success mt-5 p-3" type="submit" value="Register" name="register">
        </div>
    </form>
    <div class="back">
        <a href="admin.php" ><button class="btn btn-warning btn-lg">Back</button></a>
    </div>
</div>
<?php
include '../database.php';
include '../functions.inc.php';
if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pnumber=$_POST['pnumber'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $passwordHashed = password_hash($cpassword, PASSWORD_DEFAULT);

if (emptyInputadmin($fname, $lname, $email, $password,$cpassword, $pnumber, $dob, $gender) !== false) {
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
if(passwordsmismatch($password,$cpassword)!==false)
{
    ?>
    <script>
        alert('Enter the same password in both fields!');
    </script>
<?php
}
if(checkemailadmin($email)!==false)
{
    ?>
    <script>
        alert('Select the correct email');
    </script>
<?php
}
else
{

$qry = "INSERT INTO users (first_name,last_name, email, password,phoneno,birth,gender,type) VALUES ('" . $fname . "','" . $lname . "', '" . $email . "', '" . $passwordHashed . "', '" . $pnumber . "', '" . $dob . "', '" . $gender . "', '" . $type . "')";
$db = new Database();
if ($db->UDI($qry) == true) {
?>
    <script>
        window.location.href = 'admin.php';
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
</body>
</html>
