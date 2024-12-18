<?php
    $showAlert = false;
    $showError = "false";
    $register=false;
    $length=true;
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include "./dbconnect.php";
  
    $f_name = $_POST["firstname"];
    $l_name = $_POST["lastname"];
    $username= $_POST["username"];
    if(strlen($username)>10){
        $showAlert=true;
        $length=false;
        $showError="Username must be less than 11 characters";
    }
   
    $email = $_POST["email"];
   
    $password = $_POST["password"];
    $cpassword = $_POST["psw-repeat"];
    $city= $_POST["city"];
    $phoneno=$_POST["phoneno"];
     $len=strlen($phoneno);
     $phoneno=(int)$phoneno;

   
    $existSql="SELECT * FROM `normaluser` WHERE username= '$username'";
    $result=mysqli_query($connection, $existSql);
    $numExistRows= mysqli_num_rows($result);
    if ($numExistRows>0){
        $showError = "Username already exists";
        $showAlert=true;
    }
    else{
        if($length){
      
if(gettype($phoneno)=='integer' &&  $len==10){
    $length=false;
  
    if(($password==$cpassword)){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        
        $sql="INSERT INTO `normaluser` (`username`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `city`, `deleted`) VALUES ('$username', '$f_name', '$l_name', '$email', '$hash', '$phoneno', '$city','0');";
        
        $result=mysqli_query($connection, $sql);
        $register=true;
    } 
else{
      $showAlert=true;
        $showError = "Passwords do not match";
    }
}

    if($length ){
        $showAlert=true;
        $showError='Please Enter a valid Phone Number';
    }
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
  <title>Register</title>
  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .container {
      margin-top: 50px;
    }
    .card-panel.success {
      background-color: #c8e6c9 !important;
      color: #388e3c;
    }
    .card-panel.error {
      background-color: #ffcdd2 !important;
      color: #d32f2f;
    }
  </style>
</head>

<body>
  <?php include 'nav.php'; ?>
  
  <!-- Alerts -->
  <?php
     if ($showAlert) {
         echo "<div class='card-panel error center-align'>$showError</div>";
     }
     if ($register) {
         echo "<div class='card-panel success center-align'>Successfully Registered!</div>";
         header("Refresh:1; url=./login.php");
     }
  ?>

  <div class="container">
    <div class="row">
      <form action="" method="POST" class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title center-align">User Registration Form</span>
            <div class="row">
              <!-- First Name -->
              <div class="input-field col s12 m6">
                <input id="firstname" type="text" name="firstname" required>
                <label for="firstname">First Name</label>
              </div>

              <!-- Last Name -->
              <div class="input-field col s12 m6">
                <input id="lastname" type="text" name="lastname" required>
                <label for="lastname">Last Name</label>
              </div>
            </div>

            <div class="row">
              <!-- Username -->
              <div class="input-field col s12">
                <input id="username" type="text" name="username" maxlength="10" required>
                <label for="username">Username</label>
              </div>
            </div>

            <div class="row">
              <!-- Email -->
              <div class="input-field col s12">
                <input id="email" type="email" name="email" required>
                <label for="email">Email</label>
              </div>
            </div>

            <div class="row">
              <!-- Password -->
              <div class="input-field col s12 m6">
                <input id="password" type="password" name="password" required>
                <label for="password">Password</label>
              </div>

              <!-- Confirm Password -->
              <div class="input-field col s12 m6">
                <input id="psw-repeat" type="password" name="psw-repeat" required>
                <label for="psw-repeat">Confirm Password</label>
              </div>
            </div>

            <div class="row">
              <!-- City -->
              <div class="input-field col s12 m6">
                <input id="city" type="text" name="city" required>
                <label for="city">City</label>
              </div>

              <!-- Phone Number -->
              <div class="input-field col s12 m6">
                <input id="phoneno" type="text" name="phoneno" pattern="[0-9]{10}" required>
                <label for="phoneno">Phone Number</label>
              </div>
            </div>
          </div>

          <div class="card-action center-align">
            <!-- Submit and Reset Buttons -->
            <button type="submit" class="btn waves-effect waves-light">Register</button>
            <button type="reset" class="btn red lighten-1 waves-effect waves-light">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php include 'footer.php' ?>
  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
