<?php
include ("./login/database.php");
include ("./login/productsclass.php");
$db=new database();
$id=$_POST['id'];
$qry = "INSERT INTO cart (productBrand, productImage, productPrice,product_mid) SELECT product_bm, product_image,price,model_id FROM products WHERE id='".$id."' ";
if ($db->UDI($qry) == true) {
    header('Location:./store.php');
} else {
    ?>
    <script>
        alert('Error encountered while adding Product!');
    </script>
    <?php
}
?>