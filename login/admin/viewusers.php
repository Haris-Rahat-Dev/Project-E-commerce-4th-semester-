<?php
session_start();
if (isset($_SESSION['name'])) {
    $name=$_SESSION['name'];
    include("../database.php");
    include("../userclass.php");
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
<h3 class="h3 text-center my-3">Clients</h3>
<table class="table table-striped table-bordered table-hover table-sm table-light">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Type</th>
        <th colspan="2">Operations</th>
    </tr>
    <?php
    $db = new database();
    $qry = "SELECT * FROM users Where type='client'";
    $rows = $db->Search($qry, users::class);
    if ($rows != null) {
        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td>' . $row->getFirstName(). '</td>';
            echo '<td>' . $row->getLastName() . '</td>';
            echo '<td>' . $row->getEmail() . '</td>';
            echo '<td>' . $row->getPhoneno() . '</td>';
            echo '<td>' . $row->getBirth() . '</td>';
            echo '<td>' . $row->getGender(). '</td>';
            echo '<td>' . $row->getType(). '</td>';
            echo '<td><a href="./delete.php?id='.$row->getCId().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
            echo '</tr>';
        }
    } else {
        echo "No record found in the database";
    }
    ?>
</table>

<h3 class="h3 text-center my-3">Managers</h3>
<table class="table table-striped table-bordered table-hover table-sm table-light">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Type</th>
        <th colspan="2">Operations</th>
    </tr>
    <?php
    $db = new database();
    $qry = "SELECT * FROM users Where type='manager'";
    $rows = $db->Search($qry, users::class);
    if ($rows != null) {
        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td>' . $row->getFirstName(). '</td>';
            echo '<td>' . $row->getLastName() . '</td>';
            echo '<td>' . $row->getEmail() . '</td>';
            echo '<td>' . $row->getPhoneno() . '</td>';
            echo '<td>' . $row->getBirth() . '</td>';
            echo '<td>' . $row->getGender(). '</td>';
            echo '<td>' . $row->getType(). '</td>';
            echo '<td><a href="./delete.php?id='.$row->getCId().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
            echo '</tr>';
        }
    } else {
        echo "No record found in the database";
    }
    ?>
</table>
<h3 class="h3 text-center my-3">Admins</h3>
<table class="table table-striped table-bordered table-hover table-sm table-light">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Type</th>
        <th colspan="2">Operations</th>
    </tr>
    <?php
    $db = new database();
    $qry = "SELECT * FROM users Where type='admin'";
    $rows = $db->Search($qry, users::class);
    if ($rows != null) {
        foreach ($rows as $row) {
            echo '<tr>';
            echo '<td>' . $row->getFirstName(). '</td>';
            echo '<td>' . $row->getLastName() . '</td>';
            echo '<td>' . $row->getEmail() . '</td>';
            echo '<td>' . $row->getPhoneno() . '</td>';
            echo '<td>' . $row->getBirth() . '</td>';
            echo '<td>' . $row->getGender(). '</td>';
            echo '<td>' . $row->getType(). '</td>';
            echo '<td><a href="./delete.php?id='.$row->getCId().'" onclick="return confirm(\'Are you sure?\')"><button class="btn btn-danger">Delete</button></a></td>';
            echo '</tr>';
        }
    } else {
        echo "No record found in the database";
    }
    ?>
</table>

<a href="./admin.php"><button style="margin-left:46%;border: none;" class="btn-success btn-lg">Back</button></a>
</body>

</html>
