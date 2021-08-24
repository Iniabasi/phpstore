<?php

include("../partials/connect.php");

$cateory=$_POST['name'];


$sql = "INSERT INTO categories(name) VALUES ('$category')";

$connect->query($sql);

?>