<?php
session_start();
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    header("Location: .\logout.php");
}
/*header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");*/
if (isset($_POST["submit"])) {
    include('..//database.php');
    $ptype = $_POST['ptype'];
    $pbm = $_POST['pbm'];
    $model_id = $_POST['model_id'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    //for uploading images
    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower((end($fileExt)));
    //file types allowed
    $allowed = array('jpg', 'jpeg', 'png','webp');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($filesize < 5000000) {
                $fileNamenew = uniqid() . "." . $fileActualExt;
                $uploadfolder = 'uploads/' . $fileNamenew;
                move_uploaded_file($fileTmpname, $uploadfolder);
            } else {
                ?>
                <!--echo "Image size is too big!";-->
                <script>
                    alert('Image size is too big!');
                </script>
                <?php
                exit();
            }
        } else {
            ?>
            echo "Error Uploading Image!.$fileError.";
            <script>
                alert('Error Uploading Image!<?php echo $fileError?>');
            </script>
            <?php
        }
    } else {
        ?>
        <!--echo "This image type is not supported!";-->
        <script>
            alert('This image type is not supported!');
        </script>
<?php
        exit();
    }

    $qry = "INSERT INTO products (product_type,product_bm,model_id,price,registration_date,product_image) VALUES ('" . $ptype . "','" . $pbm . "','" . $model_id . "','" . $price . "','" . $date . "','" . $fileNamenew . "')";

    $db = new database();
    if ($db->UDI($qry) == true) {
        $message = "Product Registered Successfully";
    } else {
        $message = "Error trying to register Product!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./favicon_io/favicon.ico">
    <link href="style2.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <form action="./product_insertform.php" method="POST" enctype="multipart/form-data">
        <h2 class="align">Product Information</h2>
        <div class="flexrow">
            <div>
                <label>Product Category</label>
                <br>
                <select class="box" name="ptype">
                    <option value="">Select</option>
                    <option value="Laptop">Laptop</option>
                    <option value="PC">PC</option>
                    <option value="Accessories">Accessories</option>
                </select>
                <br>
                <small>e.g. Laptop</small>
            </div>
            <div>
                <label>Product Brand & Model</label>
                <br>
                <input type="text" class="box" name="pbm">
                <br>
                <small>e.g. Hp Spectre 15</small>
            </div>
        </div>
        <div class="flexrow">
            <div>
                <label>Product Model ID</label>
                <br>
                <input type="text" class="box" name="model_id">
                <br>
                <small>e.g. VN7793G750Z</small>
            </div>
            <div>
                <label>Product Price</label>
                <br>
                <input type="text" class="box" name="price">
                <br>
                <small>e.g. Rs.10000</small>
            </div>
        </div>
        <div id="flexrow2">
            <div>
                <label>Registration Date</label>
                <br>
                <input type="date" class="box" name="date">
                <br>
                <small>e.g. 12/04/2020</small>
            </div>
            <div>
                <label>Product Image</label>
                <br>
                <input type="file" name="file">
                <br>
                <small>Image size should not be more than 5MB.</small>
                <br>
                <small>Supported Formats JPG,JPEG,PNG</small>
            </div>
        </div>
        <div class="submitbtn">
            <input type="submit" class="submit" name="submit" value="Register">
            <br>
            <?php
            if (isset($_POST['submit'])) {
                echo '<p>' . $message . '</p>';
            }
            ?>

        </div>
    </form>
    <div class="back"><a href="manager.php"><button class="btn btn-danger btn-lg">Back</button></a></div>
</body>

</html>