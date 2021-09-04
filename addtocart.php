<?php

include ("./login/database.php");
include ("./login/productsclass.php");
$db=new database();
$id=$_POST['id'];
$qry="SELECT * FROM products WHERE id='".$id."'";
$rows=$db->Search($qry, products::class);
if($rows!=null) {
    foreach ($rows as $row) {
        $product_bm = $row->getproduct_bm();
        $product_image = $row->getproduct_image();
        $price = $row->getprice();
        $model_id = $row->getmodel_id();
    }
}
$qry="INSERT INTO cart (productBrand, productImage, productPrice,product_mid) VALUES('".$product_bm."','".$product_image."','".$price."','".$model_id."')";
if($db->UDI($qry)==true)
{
    header('Location:./store.php');
    ?>
    <script>
        alert('Product Added To Cart Successfully!');
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('Error encountered while adding Product to Cart!');
    </script>
<?php
}
?>

