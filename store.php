<?php
include 'header.php';
?>
<?php
/*include './login/database.php';*/
include 'login/productsclass.php';
/*include 'cartclass.php';*/
/*$db= new Database();*/
if(isset($_SESSION['id']))
{
    $c_id=$_SESSION['id'];
}
else{

}
$qry = "SELECT * FROM products Where product_type='Laptop'";
$rows = $db->Search($qry, products::class);
?>
<h3 class="h3 text-center my-2 text-danger">Laptops</h3>
<div class="row my-3 gy-2 gx-0">
<?php
if ($rows != null) {
    foreach ($rows as $row)
    {
        $id=$row->getid();
        $product_bm=$row->getproduct_bm();
        $price=$row->getprice();
        $path = $row->getproduct_image();
        ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <form action="store.php" class="w-50 mx-auto p-4 text-center item rounded border border-danger" method="post">
                    <img src="login/manager/uploads/<?php echo $path?>" alt="" class="img-thumbnail border-0">
                    <h5 class="h5"><?php echo $product_bm?></h5>
                    <h5 class="h5">Rs.<?php echo $price ?></h5>
                    <div class="py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <?php
                    if(isset($_SESSION['name']))
                    {
                        $qry = "SELECT p_id FROM cart WHERE p_id='" .$id. "'";
                        $rows = $db->Search($qry, cart::class);
                        if ($rows != null) {
                            $row = $rows['0'];
                            $cid = $row->getPId();
                            /* foreach ($rows as $row)
                             {
                                 $cid = $row->getPId();
                             }*/
                        } else
                        {
                            $cid = 0;
                        }
                        if($cid==$id)
                        {
                            ?>
                            <input type="submit" class="btn btn-danger disabled" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <input type="hidden" value="<?php echo $c_id?>" name="c_id">
                            <?php
                        }
                        else
                        {
                            ?>
                            <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <input type="hidden" value="<?php echo $c_id?>" name="c_id">
                            <?php
                            /*$clicked=array_push($id);*/
                        }
                    }
                    else{
                        ?>
                        <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                            <?php
                    }
                    ?>
                </form>
            </div>
       <!--<div class="row">
           <div class="col-md-4">
               <form action="">
                   <div class="card">
                       <img src="login/manager/uploads/<?php /*echo $path*/?>" alt="" class="card-img h-25 w-25">
                       <div class="card-body">
                           <h4><?php /*echo $product_bm*/?></h4>
                       </div>
                       <div class="card-footer">
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star checked"></span>
                           <span class="fa fa-star"></span>
                           <span class="fa fa-star"></span>
                       </div>
                   </div>
               </form>
           </div>
       </div>-->
<?php
    }
}
?>
</div>
<?php
$qry = "SELECT * FROM products Where product_type='PC'";
$rows = $db->Search($qry, products::class);
?>
<h3 class="h3 text-center my-2 text-danger">PCs</h3>
<div class="row my-3 gy-2 gx-0">
    <?php
    if ($rows != null) {
        foreach ($rows as $row)
        {
            $id=$row->getid();
            $product_bm=$row->getproduct_bm();
            $price=$row->getprice();
            $path = $row->getproduct_image();
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <form action="" class="w-50 mx-auto p-4 text-center item rounded border border-danger" method="post">
                    <img src="login/manager/uploads/<?php echo $path?>" alt="" class="img-thumbnail border-0">
                    <h5 class="h5"><?php echo $product_bm?></h5>
                    <h5 class="h5">Rs.<?php echo $price ?></h5>
                    <div class="py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <?php
                    if(isset($_SESSION['name']))
                    {
                        $qry = "SELECT p_id FROM cart WHERE p_id='" .$id. "'";
                        $rows = $db->Search($qry, cart::class);
                        if ($rows != null) {
                            $row = $rows['0'];
                            $cid = $row->getPId();
                            /* foreach ($rows as $row)
                             {
                                 $cid = $row->getPId();
                             }*/
                        } else
                        {
                            $cid = 0;
                        }
                        if($cid==$id)
                        {
                            ?>
                            <input type="submit" class="btn btn-danger disabled" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <?php
                        }
                        else
                        {
                            ?>
                            <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <?php
                            /*$clicked=array_push($id);*/
                        }
                    }
                    else{
                        ?>
                        <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                        <?php
                    }
                    ?>
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>

<?php
$qry = "SELECT * FROM products Where product_type='Accessories'";
$rows = $db->Search($qry, products::class);
?>
<h3 class="h3 text-center my-2 text-danger">Accessories</h3>
<div class="row my-3 gy-2 gx-0">
    <?php
    if ($rows != null) {
        foreach ($rows as $row)
        {
            $id=$row->getid();
            $product_bm=$row->getproduct_bm();
            $price=$row->getprice();
            $path = $row->getproduct_image();
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <form action="" class="w-50 mx-auto p-4 text-center item rounded border border-danger" method="post">
                    <img src="login/manager/uploads/<?php echo $path?>" alt="" class="img-thumbnail border-0" >
                    <h5 class="h5"><?php echo $product_bm?></h5>
                    <h5 class="h5">Rs.<?php echo $price ?></h5>
                    <div class="py-2">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <?php
                    if(isset($_SESSION['name']))
                    {
                        $qry = "SELECT p_id FROM cart WHERE p_id='" .$id. "'";
                        $rows = $db->Search($qry, cart::class);
                        if ($rows != null) {
                            $row = $rows['0'];
                            $cid = $row->getPId();
                            /* foreach ($rows as $row)
                             {
                                 $cid = $row->getPId();
                             }*/
                        } else
                        {
                            $cid = 0;
                        }
                        if($cid==$id)
                        {
                            ?>
                            <input type="submit" class="btn btn-danger disabled" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <?php
                        }
                        else
                        {
                            ?>
                            <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <?php
                            /*$clicked=array_push($id);*/
                        }
                    }
                    else{
                        ?>
                        <input type="submit" class="btn btn-danger" value="Add to Cart" name="cart">
                        <?php
                    }
                    ?>
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
if(isset($_POST['cart']))
{
    if(isset($_SESSION['id']))
    {
        $id=$_POST['id'];
        /*$c_id=$_POST['c_id'];*/
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
        $qry="INSERT INTO cart (productBrand, productImage, productPrice,product_mid,p_id,c_id) VALUES('".$product_bm."','".$product_image."','".$price."','".$model_id."','".$id."','".$c_id."')";
        if($db->UDI($qry)==true)
        {
            ?>
            <script>
                window.location.href="store.php";
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('Error Adding Product to Cart! Try Again!');
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script>
            alert('Login To add items to Cart!');
        </script>
        <?php
    }
}
?>
<?php
include 'footer.php';
?>
