<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db");  
 $sql = "DELETE FROM xasion_feedback WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>