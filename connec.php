<?php
$server = "localhost";
$name = "name";
$mail = "email";
$password = "password";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'cabh');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo " successfull";
}
/*
else{
    $stmt = $conn->prepare("insert into registration(name, email, password) values(?,?,?)");
    $stmt->bind_param("ssssi",$name,$mail,$password);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}*/
?>