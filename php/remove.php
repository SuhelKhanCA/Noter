<?php
include "./dbconnect.php";
$id=$_GET['id'];
$sub=substr($id,0,1);
$sub1=substr($id,1,strlen($id));

if($sub==1  ){
$user=$_GET['user'];

    $sql="DELETE FROM `notes` WHERE `noteid`='$sub1'";
$result=mysqli_query($connection,$sql);
header("location:./admin_user_notes.php?id=$user");

}
else{
    $sql="DELETE FROM `notes` WHERE `noteid`=$id";
$result=mysqli_query($connection,$sql);
header("location:./notes.php");
}

?>