<?php

include("../partials/connect.php");

$categoriy=$_POST['name'];
$categoryy=$_POST['price'];

$categoryyy=$_POST['description'];
$categoryyyy=$_POST['category'];


$sql = "INSERT INTO prod(name,price,description,category_id) VALUES ('$categoriy', '$categoryy', '$categoryyy', 2)";

$connect->query($sql);

?>