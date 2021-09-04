<?php
include ('../database.php');
$id = $_GET['id'];

$qry = "Delete from products where id='".$id."'";
$db=new Database();
if($db->UDI($qry)==true){
    header('Location:./display.php');
    ?>
    <script>
        alert('Product Deleted Successfully!');
    </script>
<?php
} else {
    ?>
    <script>
        alert('Error deleting Product!');
    </script>
<?php
}
?>
