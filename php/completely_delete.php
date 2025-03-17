<?php

include"./dbconnect.php";
$username=$_GET['id'];
$sql="DELETE FROM `normaluser` WHERE `normaluser`.`username` = '$username'";
$result=mysqli_query($connection,$sql);
header("location:./removeUser.php");
?>