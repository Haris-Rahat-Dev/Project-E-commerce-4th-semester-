<?php
include('..//database.php');
$pname = $_POST['pname'];
$pbm = $_POST['pbm'];
$model_id = $_POST['model_id'];
$fyear = $_POST['fyear'];
$date = $_POST['date'];
$image = $_FILES['img'];

$qry = "INSERT INTO products (product_name,product_bm,model_id,fabrication_year,registration_date,product_image) VALUES ('" . $pname . "','" . $pbm . "','" . $model_id . "','" . $fyear . "','" . $date . "','" . $image . "')";

$db = new database();
if ($db->UDI($qry) == true) {
    echo  "<h4>Product Registered Successfully<h4>";
} else {
    echo  "<h4>Error trying to register Product!<h4>";
}
