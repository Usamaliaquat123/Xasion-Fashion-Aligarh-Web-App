<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db"); 


 $sql = "INSERT INTO xasions_users(firstname, lastname, email, pwd, type) VALUES('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["pwd"]."', '".$_POST["type"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 