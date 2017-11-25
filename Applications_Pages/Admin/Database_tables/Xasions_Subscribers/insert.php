<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db"); 


 $sql = "INSERT INTO xasion_subscriber(email) VALUES('".$_POST["email"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 