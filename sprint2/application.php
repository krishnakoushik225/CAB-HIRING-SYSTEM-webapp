<?php


$candname = $_POST['candname'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$mobile= $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];

$pphoto = $_POST['pphoto'];
$sign = $_POST['sign'];
$aadhar = $_POST['aadhar'];
$licence = $_POST['licence'];

$conn = new mysqli('localhost', 'root', '', 'cabh');

$sql1 = "select * from jobapplicants where CandEmail = '$email'";

$result = mysqli_query($conn, $sql1);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >= 1){  
            echo '<script>alert("User Account already exists...")</script>';
        }
    else{

$sql = "INSERT INTO jobapplicants (CandName, FatherName, Gender, Mob_no, CandEmail, Address, Town, District, Pincode, State, PassPhoto, Signature, Id, Licence)
    VALUES('$candname', '$fname', '$gender', '$mobile', '$email', '$address', '$ciity', '$district', '$pincode', '$state', '$pphoto', '$sign', '$aadhar', '$licence')";

    if ($conn->query($sql) === TRUE){
        echo "1 record added";
        header('location:application1.html');
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
}

?>
