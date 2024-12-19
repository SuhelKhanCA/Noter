<?php
include "dbconnect.php";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
   
    $id= $_SESSION['id'];
    $title=$_POST['note_title'];
    $desc=$_POST['note_desc'];
    if($title!="" && $desc!=""){
    $user= $_SESSION['username'];
    date_default_timezone_set("Asia/Kolkata");
   

    $date=date("d/m/y");
    $time= date("h:i:s A");
    
  $sql="UPDATE `notes` SET `notename`='$title',`Description`='$desc',`username`='$user',`ldate`='$date',`ltime`='$time' WHERE  `noteid`='$id'";
$result=mysqli_query($connection ,$sql);

}
}
header('location:./notes.php');

?>