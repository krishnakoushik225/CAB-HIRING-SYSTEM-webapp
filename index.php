<?php
require_once "driverlogin.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styleee.css">
  <title>Login Form Demo</title>
  <style type ="text/css">
    body{
      background-image: url(wall.jpg);
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    
    <form action="index.php" class="form" method="post">
    <h4 style="color:red;">
      <?php
      if(isset($err))
      {
        echo $err;
      }
      ?>
    </h4>
      <img src="avatar.png">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="email" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn" name="SignIn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>
      </form>
    </div>
  </div>
</body>
</html>