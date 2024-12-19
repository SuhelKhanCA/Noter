<?php
include "dbconnect.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>User Information</title>
</head>

<body>
    <?php include "./nav.php"; ?>

    <div class="container">
        <h4 class="center-align teal-text">User Information</h4>

        <?php
        $id = $_GET['id'];

        echo '
        <div class="card teal lighten-5">
            <div class="card-content">
                <span class="card-title"><b>Username: ' . htmlspecialchars($id) . '</b></span>
                <div class="card-action">
                    <a href="./temp_remove_user.php?id=' . htmlspecialchars($id) . '" class="btn red darken-2">Remove</a>
                    <a href="./admin_user_notes.php?id=' . htmlspecialchars($id) . '" class="btn teal">View Notes</a>
                </div>
            </div>
        </div>';
        ?>

        <?php
        $sql = "SELECT * FROM `normaluser` WHERE `username`='$id'";
        $result = mysqli_query($connection, $sql);

        while ($fetch = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card">
                <div class="card-content">
                    <ul class="collection">
                        <li class="collection-item"><b>First Name:</b> ' . htmlspecialchars($fetch['firstname']) . '</li>
                        <li class="collection-item"><b>Last Name:</b> ' . htmlspecialchars($fetch['lastname']) . '</li>
                        <li class="collection-item"><b>Username:</b> ' . htmlspecialchars($fetch['username']) . '</li>
                        <li class="collection-item"><b>Email:</b> ' . htmlspecialchars($fetch['email']) . '</li>
                        <li class="collection-item"><b>Phone Number:</b> ' . htmlspecialchars($fetch['phoneno']) . '</li>
                        <li class="collection-item"><b>City:</b> ' . htmlspecialchars($fetch['city']) . '</li>
                    </ul>
                </div>
            </div>';
        }
        ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
