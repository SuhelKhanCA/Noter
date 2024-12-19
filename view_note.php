<?php
include 'dbconnect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Note</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'nav.php'; ?>

    <div class="container">
        <?php
        $sql = "SELECT * FROM notes WHERE noteid='$id'";
        $result = mysqli_query($connection, $sql);
        while ($fetch = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card">
                <div class="card-content">
                    <span class="card-title teal-text"><b>Note Title:</b> ' . htmlspecialchars($fetch['notename']) . '</span>
                    <p><b>Description:</b></p>
                    <p>' . nl2br(htmlspecialchars($fetch['Description'])) . '</p>
                </div>
                <div class="card-action">
                    <p><b>Date Created:</b> ' . date('d-m-Y', strtotime($fetch['time'])) . '</p>
                    <p><b>Time Created:</b> ' . date('h:i A', strtotime($fetch['time'])) . '</p>
                </div>
            </div>';
        }
        ?>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
