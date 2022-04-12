<?php  

include "config.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($link, $sql); ?>