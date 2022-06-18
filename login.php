<?php      
    include('connec.php');  
session_start();
    $con = mysqli_connect('localhost', 'root', '', 'cabh');
    $eemail = $_POST['eemail'];  
    $ppassword = $_POST['ppassword'];  
    $_SESSION['email']= $eemail;
      
        //to prevent from mysqli injection  
        $eemail = stripcslashes($eemail);  
        $ppassword = stripcslashes($ppassword);  
        $eemail = mysqli_real_escape_string($con, $eemail);  
        $password = mysqli_real_escape_string($con, $ppassword);  
      
        $sql = "select * from customerdata where cemail = '$eemail' and cpassword = '$ppassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       


          
        if($count == 1){  
           header('location:menu\search cab.php');
          //print_r($_SESSION['email']);
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>