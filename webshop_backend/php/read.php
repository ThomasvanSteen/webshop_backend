<?php  

include "config.php";

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($link, $sql); ?>