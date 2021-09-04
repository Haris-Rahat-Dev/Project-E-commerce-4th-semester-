<?php
include 'header.php';
?>
<?php
$qry="SELECT * FROM cart ";
$rows=$db->Search($qry,cart::class);
?>
<div class="row container mt-4 cart">
    <div class="col col-lg-6 col-sm-12 container">
        <table cellpadding="10px" class="table shadow">
            <?php
            if($rows!=null)
            {
                foreach ($rows as $row)
                {
                    $id=$row->getID();
                    $image=$row->getProductImage();
                    $name=$row->getProductBrand();
                    $price=$row->getProductPrice();
                    $model=$row->getProductMid();
                    ?>
                    <tr>
                        <td><img src="./login/manager/uploads/<?php
                            if(isset($_SESSION['name']))
                            {
                                echo $image;
                            }
                            else{
                            }
                            ?>" class="w-50" alt="">
                        </td>
                        <td><?php
                            if(isset($_SESSION['name']))
                            {
                                echo $name;
                            }
                            else{
                                echo "Shop!";
                            }
                            ?>
                        </td>
                        <td>Rs.<?php
                            if(isset($_SESSION['name']))
                            {
                                echo $price;
                            }
                            else
                            {
                                echo "0";
                            }
                            ?>
                        </td>
                        <td><?php
                            if(isset($_SESSION['name']))
                            {
                                echo $model;
                            }else
                            {
                                echo "0";
                            }
                            ?>
                        </td>
                        <?php
                        if(isset($_SESSION['name']))
                        {
                            ?>
                            <td><a href="./deleteitem.php?id=<?php echo $id?>" class="btn btn-danger">Remove</a></td>
                            <?php
                        }else
                        {

                        }
                        ?>

                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
    <div class="col col-lg-6 col-sm-12 container">
        <table cellpadding="10px" class="table shadow">
            <tr>
                <td>Sr.</td>
                <td>Price</td>
            </tr>
            <?php
            $total=0;
            $i=0;
            if($rows!=null)
            {
                foreach ($rows as $row)
                {
                    $id=$row->getID();
                    $image=$row->getProductImage();
                    $name=$row->getProductBrand();
                    $price=$row->getProductPrice();
                    $model=$row->getProductMid();
                    $total+=$row->getProductPrice();
                    ?>
                    <tr>
                        <td><?php echo $i+=1?></td>
                        <td>Rs.<?php
                            if(isset($_SESSION['name']))
                            {
                                echo $price;
                            }
                            else
                            {
                               echo "Shop!";
                            }
                            ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            <tr>
                <td>Total:</td>
                <td>Rs.<?php
                    if(isset($_SESSION['name']))
                    {
                        echo $total;
                    }
                    else
                    {
                        echo "0";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <form action="" class="w-50 my-4" method="post">
            <label for="" class="form-label my-2">Credit card Number</label>
            <input type="text" class="form-control">
            <label for="" class="form-label my-2">Address</label>
            <input type="text" class="form-control">
            <input type="submit" class="btn btn-info my-3" name="check" value="Checkout!">
        </form>
        <div class="d-flex flex-row ">
            <i class="fa fa-cc-mastercard fa-lg bg-danger fs-3"></i>
            <i class="fa fa-cc-visa fa-lg mx-2 bg-danger fs-3"></i>
            <i class=" 	fa fa-cc-paypal fa-lg bg-danger fs-3"></i>
        </div>
    </div>
</div>
<?php
if(isset($_POST['check']))
{
    $qry="DELETE FROM cart";
    if($db->UDI($qry)==true) {
        ?>
        <script>
            window.location.href="cart.php";
        </script>
<?php
    }
    else
    {
        ?>
        <script>
            alert('Transaction Error! Try Again!');
        </script>
<?php
    }

}

?>
<?php
include 'footer.php';
?>
