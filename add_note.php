<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include './dbconnect.php';
    
    session_start();
    
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}

    $title=$_POST['note_title'];
    $desc=$_POST['note_desc'];
    if($title!="" && $desc!=""){
    $user= $_SESSION['username'];
    date_default_timezone_set("Asia/Kolkata");
    $time= date("h:i:s A");
    $date=date("d/m/y");
  
    
    
 $sql="INSERT INTO `notes`(`notename`, `Description`, `username` ,`date`,`time`) VALUES ('$title','$desc','$user','$date','$time')";
    $result=mysqli_query($connection,$sql);
    

header("location:./notes.php");


    }

else{
   
    echo '<script>
    alert("Please Fill All  Fields");
    location.replace("./notes.php");
    </script>';
       
}
}
?>