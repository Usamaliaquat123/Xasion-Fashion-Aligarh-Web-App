<?php
$conn = mysqli_connect("localhost", "root", "", "xasion-registration-db");

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
$shippAdd = $_POST[shippAddress];
$uid

$sql = "UPDATE xasions_users SET ShippingAddress = '$shippAdd' WHERE xasions_users id = '$uid'";

?>