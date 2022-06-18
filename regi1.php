<?php
require_once "driverlogin.php"
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    
    <style>
        body{
      background-image: url(keys.jpg);
      background-repeat: no-repeat;
      background-size: 2900px 800px;
    }
    </style>

    
    <body>
        <div class="main">
        <div class="register">
            <h2>Register Here</h2>
            <form id="register" action="driverregi1.php" method="post">
            <label> Driver Name :</label>
            <br>
            <input type="text" name="dname"
            id="name" placeholder="Enter your Name" required>
            <br><br>
            <label>Mobile :</label>
            <input type="number" name="mobile"
            id="mobile" placeholder="Enter your mobile" required>
            <br><br>
            <label>Email : </label>
            <br>
            <input type="email" name="email"
            id="email" placeholder="Enter your Email" required>
            <br><br>
            <label>Password : </label>
            <br>
            <input type="password" name="password"
            id="password" placeholder="Enter your password" required>
            <br><br>

            <label>Cab Number : </label>
            <br>
            <input type="text" name="cabno"
            id="cabno" placeholder="Enter cab number" required>
            <br><br>

            
            <input type="submit" value="Submit" name="submit" id="submit">


            </form>
        </div>
    </body>

</html>