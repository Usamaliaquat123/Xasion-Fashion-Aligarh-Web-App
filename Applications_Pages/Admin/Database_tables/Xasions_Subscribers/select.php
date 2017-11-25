<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db");  
 $output = '';  
 $sql = "SELECT * FROM xasion_subscriber ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th style="color:aliceblue;" width="3%">Id</th>  
                     <th style="color:aliceblue;" width="30%">Email</th>  
                     <th style="color:aliceblue;" width="7%">Delete</th>  
                     
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td style="color:aliceblue;">'.$row["id"].'</td>  
                     <td style="color:aliceblue;" class="email" data-id1="'.$row["email"].'" contenteditable>'.$row["email"].'</td>  
                    
                     
                     <td><button type="button" name="delete_btn" data-id2="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete_subs">Delete this Subscribtion</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  

                <td style="color:aliceblue;" id="email_subs" contenteditable></td>  
                
                <td><button type="button" name="btn_add_subs" id="btn_add_subs" class="btn btn-xs btn-success">Add New Subscription</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td style="color:aliceblue;"colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>