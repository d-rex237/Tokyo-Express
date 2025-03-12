<?php
include "connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

//get form data

$username = mysqli_real_escape_string($conn , $_POST['username']);
$email = mysqli_real_escape_string($conn , $_POST['email']);
$password = mysqli_real_escape_string($conn , $_POST['password']);

//check if email is already in database
$checkEmail = "SELECT * FROM users WHERE email='$email'";
$results = $conn->query($checkEmail);

if($results->num_rows >0){
    echo " <script> alert('Email Already Exist!!!');
    windows.location.href = 'index.php';
    </script> 
    ";
}
else{
// create an account
//secure hashing password

$hashed_password = password_hash($password , PASSWORD_BCRYPT);

$sql = "INSERT INTO users(username, email,password) VALUES ('$username','$email','$hashed_password')";

if($conn->query($sql)===TRUE){
    echo " <script> alert('account created!!!');
    windows.location.href = '/index.php';
    </script> 
    ";
}
else{
    echo " <script> alert('Error!!! " .$conn->error . " ');
    windows.location.href = '/index.php';
    </script> 
    ";
}




}




}





?>