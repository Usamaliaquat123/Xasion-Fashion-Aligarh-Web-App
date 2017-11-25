<?php
session_start(); 
include '../sql-connection.php';

$email = $_POST['email'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM xasions_users WHERE email='$email' AND pwd='$pwd'";

$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
    
     header("location: ../login.php?error=not_registered");
    
    exit(); 
}
else{
    if($row['type'] == "Admin"){
		$_SESSION['uid'] = $row['id'];
		$_SESSION['type'] = $row['type'];
         $_SESSION['firstname_session'] = $row['firstname'];
        $_SESSION['lastname_session'] = $row['lastname'];
        header("location: ../Admin/Admin-pannel.php");
        exit();
    } 
    
    $_SESSION['uid'] = $row['id'];
	$_SESSION['type'] = $row['type'];
    $_SESSION['firstname_session'] = $row['firstname'];
    $_SESSION['lastname_session'] = $row['lastname'];
    header("location: ../redirect.php");
}


?>