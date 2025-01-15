<?php
// session_start();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Materialize CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
      rel="stylesheet"
    />
    <!-- Materialize Icons -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="./css/materialize/materialize.min.css">
    <style>
        .nav-wrapper {
            padding: 0 20px;
        }

        .nav-wrapper ul {
            display: flex;
            align-items: center;
        }

        .brand-logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .sidenav li a {
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="teal lighten-1">
        <div class="nav-wrapper">
            <!-- Logo as Text -->
            <a href="./" class="brand-logo left">Noter</a>

            <!-- Mobile Menu Trigger -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <i class="material-icons">menu</i>
            </a>

            <!-- Desktop Navigation Links -->
            <ul class="right hide-on-med-and-down">
                <li><a href="./use.php">How To Use?</a></li>
                <?php if (!$loggedin): ?>
                    <li><a href="./login.php">Login</a></li>
                    <li><a href="./register.php">Register</a></li>
                <?php else: ?>
                    <?php if ($_SESSION['user_id'] == 1): ?>
                        <li><a href="./view_users.php">Users</a></li>
                        <li><a href="./admin_publicnotes.php">Public Notes</a></li>
                        <li><a href="./removeUser.php">Removed Users</a></li>
                    <?php else: ?>
                        <li><a href="./notes.php">Your Notes</a></li>
                        <li><a href="./notes.php">Add Note</a></li>
                        <li><a href="./publicnotes.php">Public Notes</a></li>
                    <?php endif; ?>
                    <li><a href="./logout.php">LogOut</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Mobile Navigation (Sidenav) -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="./use.php">HowToUse?</a></li>
        <?php if (!$loggedin): ?>
            <li><a href="./login.php">LOGIN</a></li>
            <li><a href="./register.php">REGISTER</a></li>
        <?php else: ?>
            <?php if ($_SESSION['user_id'] == 1): ?>
                <li><a href="./view_users.php">Users</a></li>
                <li><a href="./admin_publicnotes.php">PublicNotes</a></li>
                <li><a href="./removeUser.php">RemovedUsers</a></li>
            <?php else: ?>
                <li><a href="./notes.php">YourNotes</a></li>
                <li><a href="./notes.php">AddANote</a></li>
                <li><a href="./publicnotes.php">PublicNotes</a></li>
            <?php endif; ?>
            <li><a href="./logout.php">LogOut</a></li>
        <?php endif; ?>
    </ul>

    <!-- Materialize JS -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
    ></script> -->
    <script src="./js/materialize/materialize.min.js"></script>
    <script>
        // Initialize Mobile Sidenav
        document.addEventListener("DOMContentLoaded", function () {
            var elems = document.querySelectorAll(".sidenav");
            M.Sidenav.init(elems);
        });
    </script>
</body>
</html>
