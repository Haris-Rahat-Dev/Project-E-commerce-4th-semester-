<?php
session_start();
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    header("Location: .\logout.php");
}
include ("../database.php");
include ("../productsclass.php");
$id = $_GET['id'];
$qry = "SELECT * FROM products where id='".$id."'";
$db=new database();
$rows=$db->Search($qry, products::class);
if($rows!=null){
    foreach ($rows as $row)
    {
        $id=$row->getid();
        $product_type=$row->getproduct_type();
        $product_bm=$row->getproduct_bm();
        $model_id=$row->getmodel_id();
        $price=$row->getprice();
        $registration_date=$row->getregistration_date();
        $product_image=$row->getproduct_image();
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
    <title>Update</title>
</head>

<body>
<form action="" method="POST" enctype="multipart/form-data">
    <h2 class="align">Product Information</h2>
    <div class="flexrow">
        <div>
            <input type="hidden" value="<?php $id?>">
            <label>Product Category</label>
            <br>
            <select class="box" name="ptype">
                <option value="<?php echo $product_type?>"><?php echo $product_type?></option>
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
            <input type="text" value="<?php echo $product_bm?>" class="box" name="pbm">
            <br>
            <small>e.g. Hp Spectre 15</small>
        </div>
    </div>
    <div class="flexrow">
        <div>
            <label>Product Model ID</label>
            <br>
            <input type="text" value="<?php echo $model_id?>" class="box" name="model_id">
            <br>
            <small>e.g. VN7793G750Z</small>
        </div>
        <div>
            <label>Product Price</label>
            <br>
            <input type="text" value="<?php echo $price?>" class="box" name="price">
            <br>
            <small>e.g. 2019</small>
        </div>
    </div>
    <div id="flexrow2">
        <div>
            <label>Registration Date</label>
            <br>
            <input type="date" class="box" value="<?php echo $registration_date?>" name="date">
            <br>
            <small>e.g. 12/04/2020</small>
        </div>
        <div>
            <label>Product Image</label>
            <br>
            <input type="file" name="file" value="<?php echo $product_image ?>">
            <br>
            <small>Image size should not be more than 5MB.</small>
            <br>
            <small>Supported Formats JPG,JPEG,PNG</small>
        </div>
    </div>
    <div class="submitbtn">
        <input type="submit" class="submit" name="submit" value="Update">
    </div>
</form>
<div class="back"><a href="manager.php"><button class="btn btn-danger btn-lg">Back</button></a></div>
</body>
<?php
if (isset($_POST["submit"])) {
$ptype = $_POST['ptype'];
$pbm = $_POST['pbm'];
$pmodel_id = $_POST['model_id'];
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
echo "Image size is too big!";
}
} else {
echo "Error Uploading Image!.$fileError.";
}
} else {
echo "This image type is not supported!";
}

$qry = "UPDATE products SET product_type='$ptype',product_bm='$pbm',model_id='$pmodel_id',price='$price',registration_date='$date',product_image='$fileNamenew' Where id='".$id."'";
if ($db->UDI($qry) == true) {
header('Location: ./display.php');
} else {
?>
    <script>
        alert('Error Updating Product!');
    </script>
<?php
}
}
?>
</html>
