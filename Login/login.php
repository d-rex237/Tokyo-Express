<?php
include "connect.php";


$username = mysqli_real_escape_string($conn , $_POST['username']);
$password = mysqli_real_escape_string($conn , $_POST['password']);

//FETCH DATABASE

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if($result->num_rows >0){
    $user = $result->fetch_assoc();



    //Check password
    session_start(); // Start the session
    
    if (password_verify($password, $user['password'])) {
        echo "Login Successful! WELCOME " . $user['username'];
    
        // Store user session (optional)
        $_SESSION['username'] = $user['username'];
    
        // Redirect to dashboard
        header("Location: ../backend/dash.php");
        exit(); // Always exit after header()
    } else {
        echo "Wrong password";
    }
    
    






} else{
    echo "Username Doesn't Exist";

}








?>