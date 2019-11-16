<?php
require("dbconnect.php");
$id = $_POST['product_id'];
$sql = "DELETE FROM product WHERE id = '$id'";
pg_query($conn,$sql); 
header("Location: ./admin.php");
?>