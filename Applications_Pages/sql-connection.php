<?php
$conn = mysqli_connect("localhost", "root", "", "xasion-registration-db");

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
?>