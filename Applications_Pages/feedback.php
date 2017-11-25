<?php
session_start(); 
include 'sql-connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mesage = $_POST['message'];


$sql = "INSERT INTO xasion_feedback (name, email, message) VALUES ('$name', '$email', '$mesage')";
$result = $conn->query($sql);

$sql = "SELECT email FROM xasion_feedback WHERE email='$email'";
$result = $conn->query($sql);
        if($result !== true){
            header("location: ../index.php?Sucess=feedback");
            exit(); 
            }
        else{
            echo "server error";
        }

//header("location: ../index.php");

?>