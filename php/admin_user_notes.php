<?php
include "./dbconnect.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
include "./nav.php";
$user = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Notes</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h4 class="center-align teal-text">User Notes</h4>

        <?php
        $query = "SELECT * FROM `notes` WHERE `username`='$user'";
        $result = mysqli_query($connection, $query);
        $no_notes = true;

        while ($fetch = mysqli_fetch_assoc($result)) {
            $no_notes = false;

            echo '
            <div class="card">
                <div class="card-content">
                    <span class="card-title teal-text"><b>Title:</b> ' . htmlspecialchars($fetch['notename']) . '</span>
                </div>
                <div class="card-action">
                    <a href="./remove.php?id=' . urlencode($fetch['noteid']) . '&user=' . urlencode($user) . '" class="btn red lighten-1">Remove</a>
                </div>
                <div class="card-content">
                    <p><b>Date Created:</b> ' . htmlspecialchars(date('d-m-Y', strtotime($fetch['time']))) . '</p>
                    <p><b>Time Created:</b> ' . htmlspecialchars(date('H:i:s', strtotime($fetch['time']))) . '</p>
                </div>
            </div>';
        }

        if ($no_notes) {
            echo "
            <div class='card-panel red lighten-4 center-align'>
                <p class='red-text'><b>Currently, this user has no notes.</b></p>
            </div>";
        }
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
