<?php
session_start(); 
include 'sql-connection.php';

$email = $_POST['email'];
$sql = "INSERT INTO xasion_subscriber (email) VALUES ('$email')";
$result = $conn->query($sql);


$sql = "SELECT email FROM xasions_subscriber WHERE email='$email'";
$result = $conn->query($sql);
        if($result !== true){
            header("location: ../index.php?Sucess=subscriber");
            exit(); 
            }
        else{
            echo "server error";
        }



?>