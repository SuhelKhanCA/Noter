<?php

include "./dbconnect.php";
session_start();
$username=$_GET['id'];
$admin=$_SESSION['username'];
$sql= "UPDATE `normaluser` SET `deleted`='1' WHERE `username`='$username'";
$result=mysqli_query($connection, $sql);

header("location:./view_users.php");
?>