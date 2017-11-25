<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db");  
 $sql = "DELETE FROM cart WHERE id = '".$_POST["id1"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>