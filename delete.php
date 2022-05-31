<?php
include 'config.php';

echo $ID = $_GET['Id'];
$query= "DELETE FROM `info` WHERE ID=$ID";
mysqli_query($con,$query);

header('location:index.php');

?>