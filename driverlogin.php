<?php      
    include('driveconnec.php');  
    
   // $con = mysqli_connect('localhost', 'root', '', 'cabh');

   if(isset($_POST['SignIn']))
   {
      $email = $_POST['email'];  
       $password = $_POST['password'];  
        $demail = $email;

       session_start();
       $_SESSION['demail']= $demail;
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from driver where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            echo "<h1><center> Login successful </center></h1>"; 
            header('location:anish/driver_portal.php'); 
        }  
        else{  
            $err="Login failed. Invalid username or password";  
        }  
        
    }

?>