<?php
$login = false;
$error = false;
$showError = "Invalid Username";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "./dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST['password'];

    $sql = "SELECT * FROM normaluser where username='$username' and deleted='0'";
    $result = mysqli_query($connection, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $result = mysqli_fetch_assoc($result);

        if (password_verify($password, $result['password'])) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = 0;
            $showError = "";

            header("refresh:1; url=./notes.php");
        } else {
            $error = true;
            $showError = "Invalid Password";
        }
    } else {
        $sql = "SELECT * FROM admin where adminid='$username'";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $result = mysqli_fetch_assoc($result);

            if (password_verify($password, $result['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = 1;

                header("refresh:1; url=./view_users.php");
            } else {
                $error = true;
                $showError = "Invalid Password";
            }
        } else {
            $error = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .form-div{
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <!-- Success and Error Messages -->
        <?php if ($login): ?>
            <div class="card-panel green lighten-4 green-text text-darken-4 success-message">
                Successfully Logged In
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="card-panel red lighten-4 red-text text-darken-4 error-message">
                <?= $showError; ?>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <div class="row form-div">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card z-depth-3">
                    <div class="card-content">
                        <span class="card-title center">User Login</span>
                        <form action="" method="POST">
                            <div class="input-field">
                                <input id="username" type="text" name="username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="card-action center-align">
                                <!-- Submit and Reset Buttons -->
                                <button type="submit" class="btn waves-effect waves-light">Register</button>
                                <button type="reset" class="btn red lighten-1 waves-effect waves-light">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'log-footer.php' ?>
    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
