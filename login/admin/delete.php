<?php
include ('../database.php');
$id = $_GET['id'];

$qry = "Delete from users where c_id='".$id."'";
$db=new Database();
if($db->UDI($qry)==true){
    header('Location:./viewusers.php');
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
