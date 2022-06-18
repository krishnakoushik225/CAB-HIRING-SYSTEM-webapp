<?php      
    $con = mysqli_connect('localhost', 'root', '', 'cabh');
    $usrname = $_POST['usrname'];  
    $pswrd = $_POST['pswrd'];  
    
    $sql = "select * from admin where username = '$usrname' and password = '$pswrd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:admeeeeen\inde.html'); 
            //echo "hello world";
        }  
        else{  
            $err="Login failed. Invalid username or password";  
        }  

?>