<?php

$host="localhost";
$user="root";
$password="";
$dbname="phpstore";

$connect=mysqli_connect($host, $user, $password,$dbname);


if($connect -> mysqli_error){
	echo "N";
}else{
	echo "Works I guess";
}
?>