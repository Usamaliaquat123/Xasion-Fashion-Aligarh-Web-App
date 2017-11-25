<?php
session_start(); 
include '../sql-connection.php';

if($_POST['password'] == $_POST['cfm_password']){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $type = "Users";


     $sql = "SELECT email FROM xasions_users WHERE email='$email'";
        $result = $conn->query($sql);
        $emailcheck = mysqli_num_rows($result);
        if($emailcheck > 0)
        {
            header("location: ../Signup.php?error=email");
            exit(); 
        }
        $sql = "SELECT firstname FROM xasions_users WHERE firstname='$firstname'";
        $result = $conn->query($sql);
        $firstnamecheck = mysqli_num_rows($result);
    if($firstnamecheck > 0)
        {
             header("location: ../Signup.php?error=firstname");
            exit(); 
         }
        else{

$sql = "INSERT INTO xasions_users (firstname, lastname, email, pwd, type) 
       VALUES ('$firstname', '$lastname', '$email', '$pwd', '$type')";
$result = $conn->query($sql);
            
            
$sql = "SELECT firstname FROM xasions_users WHERE firstname='$firstname'";
$result = $conn->query($sql);
$re_emailcheck = mysqli_num_rows($result);          
if($re_emailcheck > 0){
            header("location: ../Signup.php?Sucess=registered");
            exit(); 
            }

//header("location: ../Signup.php");
    }   
}else{
     
    header("location: ../Signup.php?error=Password_mismatch");
            exit(); 
}


?>