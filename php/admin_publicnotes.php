<?php
session_start();
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
    <title>Public Notes</title>
</head>

<body>
    <?php
    include "nav.php";
    echo '
    <div class="container">
        <h4 class="center-align teal-text">Public Notes</h4>
    </div>';
    ?>

    <div class="container">
        <?php
        $no_notes = true;
        include "dbconnect.php";
        $sql = "SELECT * FROM `notes`
                INNER JOIN `publicnotes` ON notes.noteid=publicnotes.noteid;";
        $result = mysqli_query($connection, $sql);

        while ($fetch = mysqli_fetch_assoc($result)) {
            $no_notes = false;

            echo '
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><b>Title:</b> ' . htmlspecialchars($fetch['notename']) . '</span>
                    <p><b>Creator:</b> ' . htmlspecialchars($fetch['username']) . '</p>
                </div>
                <div class="card-action">
                    <a href="./admin_viewnotes.php?id=' . htmlspecialchars($fetch['noteid']) . '" class="btn teal lighten-1">View</a>
                </div>
                <div class="card-content">
                    <p><b>Date:</b> ' . htmlspecialchars($fetch['date']) . '</p>
                    <p><b>Time:</b> ' . htmlspecialchars($fetch['time']) . '</p>
                    <p><b>Last Date Modified:</b> ' . htmlspecialchars($fetch['ldate']) . '</p>
                    <p><b>Last Time Modified:</b> ' . htmlspecialchars($fetch['ltime']) . '</p>
                </div>
            </div>
            ';
        }

        if ($no_notes) {
            echo "<p class='red-text center-align'>Currently, no notes are public</p>";
        }
        ?>
    </div>

    <!-- Footer -->
     <?php include "footer.php"?>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
