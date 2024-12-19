<?php
include "dbconnect.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:./login.php");
}
$edited = false;
$_SESSION['id'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
<?php
include "nav.php";
?>
<div class="container">
    <h3 class="teal-text center-align">Edit Note</h3>
    <form action="./edit_note_backend.php?" method="post" class="col s12">
        <div class="input-field">
            <label for="note_title">Note Title</label>
            <input type="text" name="note_title" id="note_title" placeholder="Write The Title">
        </div>
        <div class="input-field">
            <label for="note_desc">Description</label>
            <textarea name="note_desc" id="note_desc" class="materialize-textarea" placeholder="Add a description"></textarea>
        </div>
        <div class="row">
            <div class="col s6 center-align">
                <button class="btn waves-effect waves-light teal" type="submit">Edit the Note</button>
            </div>
            <div class="col s6 center-align">
                <a href="./notes.php" class="btn waves-effect waves-light red">Close</a>
            </div>
        </div>
    </form>
</div>
<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
