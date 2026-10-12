<?php
include 'connect.php';

if(isset($_POST['signup'])){
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $email=$_POST['email'];
    $Password=md5($_POST['password']);

    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);

    if($result->num_rows>0){
        echo "Email Address Already Exists!";
    } else {
        $insertQuery="INSERT INTO users(FirstName,LastName,email,Password) 
        VALUES('$FirstName','$LastName','$email','$Password')";

        if($conn->query($insertQuery)==TRUE){
            header("Location: signup.php");
            exit();
        } else {
            echo "Error: ".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $Password=md5($_POST['password']);

    $sql="SELECT * FROM users WHERE email='$email' AND Password='$Password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>