<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db");  
 $output = '';  
 $sql = "SELECT * FROM xasion_feedback ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th style="color:aliceblue;" width="3%">Id</th>  
                     <th style="color:aliceblue;" width="20%">Name</th>  
                     <th style="color:aliceblue;" width="20%">Email</th>  
                     <th style="color:aliceblue;" width="30%">Message</th>
                     <th style="color:aliceblue;" width="20%"> Delete</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     
                     <td style="color:aliceblue;" class="name_feedback" data-id1="'.$row["name"].'" contenteditable>'.$row["name"].'</td>  
                    
                    
                     <td style="color:aliceblue;" class="email_feedback" data-id2="'.$row["email"].'" contenteditable>'.$row["email"].'</td>
                     
                
                     <td style="color:aliceblue;" class="message_feedback" data-id3="'.$row["message"].'" contenteditable>'.$row["message"].'</td>
                     
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete_feedback">Delete this User Feedback</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  

                <td style="color:aliceblue;" id="name_feedback" contenteditable></td>  
                <td style="color:aliceblue;" id="email_feedback" contenteditable></td>  
                <td style="color:aliceblue;" id="message_feedback" contenteditable></td>  
                
                <td><button type="button" name="btn_add_feedback" id="btn_add_feedback" class="btn btn-xs btn-success">Add New feedback</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td style="color:aliceblue;" colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>