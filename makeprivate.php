<?php

include "dbconnect.php";

$state = false;
$id = $_GET['id'];
$sql = "SELECT * FROM `publicnotes` WHERE `noteid` = '$id'";
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $state = true;
    $sql = "DELETE FROM `publicnotes` WHERE `noteid` = '$id'";
    $result = mysqli_query($connection, $sql);
    header("refresh:0; url=./notes.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Note Private</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    if (!$state) {
        echo "<div class='card-panel red lighten-4' style='text-align:center; margin-top:20px; border-radius:10px;'>
                <span class='red-text text-darken-4'><strong>Your Note is Already Private</strong></span>
              </div>";
        header("refresh:1; url=./notes.php");
    } else {
        echo "<div class='card-panel green lighten-4' style='text-align:center; margin-top:20px; border-radius:10px;'>
                <span class='green-text text-darken-4'><strong>Your Note is Made Private</strong></span>
              </div>";
        header("refresh:1; url=./notes.php");
    }
    ?>
</div>
<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
