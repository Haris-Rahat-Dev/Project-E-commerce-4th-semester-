<?php
session_start();
if (isset($_SESSION['name'])) {
    $name=$_SESSION['name'];

} else {
    header("Location: ../logout.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .table {
            border: 2px black;
            border-collapse: collapse;
            border-style: double;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
<h5 class="h5 text-danger text-center my-3">Laptops</h5>
    <table class="table table-striped table-bordered table-hover table-sm table-light" style="opacity:0.8">
        <tr>
            <th>Product Type</th>
            <th>Product Brand</th>
            <th>Model ID</th>
            <th>Price</th>
            <th>Registration Date</th>
            <th>Product Image</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        include("../database.php");
        include("../productsclass.php");
        $db = new database();
        $qry = "SELECT * FROM products WHERE product_type='Laptop'";
        $rows = $db->Search($qry, products::class);
        if ($rows != null) {
            foreach ($rows as $row) {
                $path = $row->getproduct_image();
                echo '<tr>';
                echo '<td>' . $row->getproduct_type() . '</td>';
                echo '<td>' . $row->getproduct_bm() . '</td>';
                echo '<td>' . $row->getmodel_id() . '</td>';
                echo '<td>' . $row->getprice() . '</td>';
                echo '<td>' . $row->getregistration_date() . '</td>';
                echo "<td><img src='uploads/$path' height='80px' width='80px'></td>";
                echo '<td><a href="./delete.php?id='.$row->getid().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
                echo '<td><a href="./update.php?id='.$row->getid().'"><button class="btn btn-success">Update</button></a></td>';
                echo '</tr>';
            }
        } else {
            echo "No record found in the database";
        }
        ?>
    </table>
    <h5 class="h5 text-danger text-center my-3">PCs</h5>
    <table class="table table-bordered table-hover table-light" style="opacity:0.8">
        <tr>
            <th>Product Type</th>
            <th>Product Brand</th>
            <th>Model ID</th>
            <th>Price</th>
            <th>Registration Date</th>
            <th>Product Image</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        $qry = "SELECT * FROM products WHERE product_type='PC'";
        $rows = $db->Search($qry, products::class);
        if ($rows != null) {
            foreach ($rows as $row) {
                $path = $row->getproduct_image();
                echo '<tr>';
                echo '<td>' . $row->getproduct_type() . '</td>';
                echo '<td>' . $row->getproduct_bm() . '</td>';
                echo '<td>' . $row->getmodel_id() . '</td>';
                echo '<td>' . $row->getprice() . '</td>';
                echo '<td>' . $row->getregistration_date() . '</td>';
                echo "<td><img src='uploads/$path' height='80px' width='80px'></td>";
                echo '<td><a href="./delete.php?id='.$row->getid().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
                echo '<td><a href="./update.php?id='.$row->getid().'"><button class="btn btn-success">Update</button></a></td>';
                echo '</tr>';
            }
        } else {
            echo "No record found in the database";
        }
        ?>
    </table>
    <h5 class="h5 text-danger text-center my-3">Accessories</h5>
    <table class="table table-bordered table-hover table-light" style="opacity:0.8">
        <tr>
            <th>Product Type</th>
            <th>Product Brand</th>
            <th>Model ID</th>
            <th>Price</th>
            <th>Registration Date</th>
            <th>Product Image</th>
            <th colspan="2">Operations</th>
        </tr>
        <?php
        $qry = "SELECT * FROM products WHERE product_type='Accessories'";
        $rows = $db->Search($qry, products::class);
        if ($rows != null) {
            foreach ($rows as $row) {
                $path = $row->getproduct_image();
                echo '<tr>';
                echo '<td>' . $row->getproduct_type() . '</td>';
                echo '<td>' . $row->getproduct_bm() . '</td>';
                echo '<td>' . $row->getmodel_id() . '</td>';
                echo '<td>' . $row->getprice() . '</td>';
                echo '<td>' . $row->getregistration_date() . '</td>';
                echo "<td><img src='uploads/$path' height='80px' width='80px'></td>";
                echo '<td><a href="./delete.php?id='.$row->getid().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
                echo '<td><a href="./update.php?id='.$row->getid().'"><button class="btn btn-success">Update</button></a></td>';
                echo '</tr>';
            }
        } else {
            echo "No record found in the database";
        }
        ?>
    </table>
    <a href="./manager.php"><button style="margin-left:46%;border: none;" class="btn-success btn-lg">Back</button></a>
</body>

</html>