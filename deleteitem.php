<?php
include 'login/database.php';

$id=$_GET['id'];
$qry="DELETE FROM cart WHERE id='".$id."'";
$db=new Database();
if($db->UDI($qry)==true){
    header('Location:./cart.php');
} else {
    ?>
    <script>
        alert('Error Removing Product!');
    </script>
    <?php
}
?>
