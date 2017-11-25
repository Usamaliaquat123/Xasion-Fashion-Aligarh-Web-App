<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db"); 


 $sql = "INSERT INTO xasion_feedback(name, email, message) VALUES('".$_POST["name"]."', '".$_POST["email"]."','".$_POST["message"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 