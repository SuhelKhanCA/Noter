<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
include "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Removed Users</title>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <h4 class="center-align teal-text">Removed Users</h4>

        <?php
        $sql = "SELECT * FROM normaluser WHERE `deleted`='1'";
        $result = mysqli_query($connection, $sql);
        $no_users = true;

        while ($fetch = mysqli_fetch_assoc($result)) {
            $no_users = false;
            echo '
            <div class="card">
                <div class="card-content">
                    <span class="card-title teal-text"><b>Username:</b> ' . htmlspecialchars($fetch['username']) . '</span>
                </div>
                <div class="card-action">
                    <a href="./completeinfo.php?id=' . urlencode($fetch['username']) . '" class="btn teal lighten-1">View Complete Info</a>
                    <a href="./repeal.php?id=' . urlencode($fetch['username']) . '" class="btn green lighten-1">Repeal</a>
                    <a href="./completely_delete.php?id=' . urlencode($fetch['username']) . '" class="btn red lighten-1">Remove Completely</a>
                </div>
            </div>';
        }

        if ($no_users) {
            echo "
            <div class='card-panel red lighten-4 center-align'>
                <p class='red-text'><b>No Users Found</b></p>
            </div>";
            header("refresh:2; url=./view_users.php");
        }
        ?>
    </div>

      <!-- Footer -->
     <?php include "log-footer.php"?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
