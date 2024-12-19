<?php 



?>

<?php

include "./dbconnect.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
$user = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <script defer src="./create_note.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="section center-align">
            <a class="btn teal lighten-1 modal-trigger" href="#createNoteModal">Create a New Note</a>
        </div>

        <!-- Create Note Modal -->
        <div id="createNoteModal" class="modal">
            <div class="modal-content">
                <h5 class="teal-text">Create a New Note</h5>
                <form action="./add_note.php" method="post">
                    <div class="input-field">
                        <label for="note_title">Note Title</label>
                        <input type="text" id="note_title" name="note_title" placeholder="Write the Title" required>
                    </div>
                    <div class="input-field">
                        <label for="note_desc">Description</label>
                        <textarea id="note_desc" name="note_desc" class="materialize-textarea" placeholder="Add a description" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn teal lighten-1">Add Note</button>
                        <a href="#!" class="btn-flat modal-close">Close</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- View Notes Section -->
        <div class="section">
            <h5 class="center-align teal-text">Your Notes</h5>
        </div>

        <?php
        $query = "SELECT * FROM `notes` WHERE `username`='$user'";
        $result = mysqli_query($connection, $query);
        $no_notes = true;

        while ($fetch = mysqli_fetch_assoc($result)) {
            $no_notes = false;
            echo '
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><b>Title:</b> ' . htmlspecialchars($fetch['notename']) . '</span>
                    <p><b>Date Created:</b> ' . htmlspecialchars($fetch['date']) . '</p>
                    <p><b>Time Created:</b> ' . htmlspecialchars($fetch['time']) . '</p>
                    <p><b>Last Date Modified:</b> ' . htmlspecialchars($fetch['ldate']) . '</p>
                    <p><b>Last Time Modified:</b> ' . htmlspecialchars($fetch['ltime']) . '</p>
                </div>
                <div class="card-action">
                    <a href="./view_note.php?id=' . urlencode($fetch['noteid']) . '" class="btn blue lighten-1">View</a>
                    <a href="./edit_note.php?id=' . urlencode($fetch['noteid']) . '" class="btn yellow darken-2">Edit</a>
                    <a href="./remove.php?id=' . urlencode($fetch['noteid']) . '" class="btn red lighten-1">Remove</a>
                    <a href="./makepublic.php?id=' . urlencode($fetch['noteid']) . '" class="btn green lighten-1">Make Public</a>
                    <a href="./makeprivate.php?id=' . urlencode($fetch['noteid']) . '" class="btn grey darken-1">Make Private</a>
                </div>
            </div>';
        }

        if ($no_notes) {
            echo "
            <div class='card-panel red lighten-4 center-align'>
                <p class='red-text'><b>You currently have no notes.</b></p>
            </div>";
        }
        ?>
    </div>
        
     <!-- Footer -->
     <?php include "footer.php"?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modals = document.querySelectorAll('.modal');
            M.Modal.init(modals);
        });
    </script>
    <script src="./js/main.js"></script>
</body>

</html>
