<?php
$dname = $_POST['dname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$cabno = $_POST['cabno'];

$conn = new mysqli('localhost', 'root', '', 'cabh');

$sql1 = "select * from driver where email = '$email'";

$result = mysqli_query($conn, $sql1);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
            echo '<script>alert("User Account already exists...")</script>';
        }
    else{

$sql = "INSERT INTO driver (dname, mobile, email, password, cab_no)
    VALUES('$dname', '$mobile', '$email', '$password', '$cabno')";

    if ($conn->query($sql) === TRUE){
        echo "1 record added";
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
}

?>
