<?php
include "./dbconnect.php";
$id=$_GET['id'];

$sql="UPDATE `normaluser` SET `deleted`='0' WHERE `username`='$id'";
$result=mysqli_query($connection,$sql);
header('location:./removeUser.php');

?>