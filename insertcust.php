<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$password = $_POST['password'];


$conn = new mysqli('localhost', 'root', '', 'cabh');

/*
// Create connection
$conn = new mysqli('localhost', 'root', '', 'cabh');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/

$sql1 = "select * from customerdata where cemail = '$email'";

$result = mysqli_query($conn, $sql1);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
            echo '<script>alert("User Account already exists...")</script>';
        }
    else{
    $sql = "INSERT INTO customerdata (cname, cemail, cphno, cpassword)
    VALUES('$name', '$email', '$phno', '$password')";

    if ($conn->query($sql) === TRUE){
        echo '<script>alert("User Account Created... Login to your Account..")</script>';
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    }

?>
