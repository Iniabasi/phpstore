<?php

include("../partials/connect.php");

$categories=$_POST['name'];


$sql = "INSERT INTO categories(name) VALUES ('$categories')";

$connect->query($sql);

header('location: productsshow.php');

?>