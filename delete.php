
<?php
require('db_connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE pid=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: product.php"); 
?>