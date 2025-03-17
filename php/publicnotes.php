<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Notes</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:./login.php");
    }
    include "nav.php";

    echo '
    <div class="container">
        <h3 class="teal-text center-align">Public Notes</h3>
    </div>';

    $no_notes = true;
    include "dbconnect.php";
    $sql = "SELECT * FROM `notes` INNER JOIN `publicnotes` ON notes.noteid = publicnotes.noteid;";
    $result = mysqli_query($connection, $sql);
    echo '<div class="container">';
    while ($fetch = mysqli_fetch_assoc($result)) {
        $no_notes = false;

        echo '
        <div class="card">
            <div class="card-content">
                <span class="card-title teal-text"><b>Title:</b> ' . htmlspecialchars($fetch['notename']) . '</span>
                <p><b>Creator:</b> ' . htmlspecialchars($fetch['username']) . '</p>
            </div>
            <div class="card-action">
                <a class="btn-small teal lighten-1" href="./view_note.php?id=' . $fetch['noteid'] . '">View</a>
            </div>
            <div class="card-content grey lighten-4">
                <p><b>Date Created:</b> ' . htmlspecialchars($fetch['date']) . '</p>
                <p><b>Time Created:</b> ' . htmlspecialchars($fetch['time']) . '</p>
                <p><b>Last Date Modified:</b> ' . htmlspecialchars($fetch['ldate']) . '</p>
                <p><b>Last Time Modified:</b> ' . htmlspecialchars($fetch['ltime']) . '</p>
            </div>
        </div>';
    }

    if ($no_notes) {
        echo "
        <p class='center-align red-text' style='padding: 20px; font-weight: bold; background-color: #ffe0e0; border-radius: 5px;'>
            Currently No Notes Are Public
        </p>";
    }
    echo '</div>';
    ?>

     <!-- Footer -->
     <?php include "footer.php"?>
    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
