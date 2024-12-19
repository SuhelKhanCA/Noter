<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <title>Users</title>
    <style>
        /* Custom Styling */
        .user-info {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 10px;
        }

        .users {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .actions {
            margin-top: 10px;
            text-align: right;
        }

        .no-users {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            background-color: rgb(222, 175, 175);
            margin-top: 10px;
            color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250, 250, 250, 0.3);
        }
    </style>
</head>
<body>
    <?php
    include "./dbconnect.php";
   
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }


    if (!isset($_SESSION['username'])) {
        header("location:./login.php");
    }
    include "./nav.php";
    ?>

    <!-- Main Container -->
    <div class="container">
        <div class="view-users">
            <h4 class="center-align teal-text text-darken-2">Users</h4>
        </div>

        <?php
        $sql = "SELECT * FROM normaluser WHERE `deleted`='0'";
        $result = mysqli_query($connection, $sql);
        $no_users = true;

        while ($fetch = mysqli_fetch_assoc($result)) {
            $no_users = false;
            echo '
            <div class="users z-depth-2">
                <div class="user-info">
                    <div class="name"><b>First Name:</b> ' . $fetch['firstname'] . '</div>
                    <div class="name"><b>Last Name:</b> ' . $fetch['lastname'] . '</div>
                </div>
                <div class="actions">
                    <a href="./completeinfo.php?id=' . $fetch['username'] . '" class="waves-effect waves-light btn-small teal lighten-1">View Info</a>
                    <a href="./temp_remove_user.php?id=' . $fetch['username'] . '" class="waves-effect waves-light btn-small red lighten-1">Remove</a>
                </div>
            </div>';
        }

        if ($no_users) {
            echo "<p class='no-users'>Currently There Are No Users</p>";
        }
        ?>
    </div>

    <!-- Footer -->
     <?php include "footer.php"?>
    <!-- MaterializeCSS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
