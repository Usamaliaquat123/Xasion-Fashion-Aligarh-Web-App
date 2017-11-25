
<?php
include 'sql-connection.php';
$name = $_SESSION['uname'];
$email = $_SESSION['uemail'];
$message = $_SESSION['umessage'];


$sql = "INSERT INTO subscribers (Name, Email, Message) VALUES ('$name', '$email', '$message')";
$result = $conn->query($sql);


header("location: ../index.html");
?> 