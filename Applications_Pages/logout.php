<?php
//session start for logout purpose
session_start(); 
//session destroy for logout purpose
session_destroy();
//redirect to index.php 
header("location: ../index.php");

?>