<?php  
 $connect = mysqli_connect("localhost", "root", "", "xasion-registration-db");  
 $output = '';  
 $sql = "SELECT * FROM xasions_users ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql); 
 $output = '<style>
 tr th{
color:"aliceblue";
opacity: .5;
 }
 
 </style>';
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="3%" style="color:aliceblue;">Id</th>  
                     <th width="5%" style="color:aliceblue;">First Name</th>  
                     <th width="5%" style="color:aliceblue;">Last Name</th>  
                     <th width="10%" style="color:aliceblue;">Email</th>
                     <th width="10%" style="color:aliceblue;">Password</th>
                     <th width="10%" style="color:aliceblue;">Type</th>
                     <th style="color:aliceblue;" width="7%">Delete</th>  
                     
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td style="color:aliceblue;">'.$row["id"].'</td>  
                     <td style="color:aliceblue;" class="firstname" data-id1="'.$row["firstname"].'" contenteditable>'.$row["firstname"].'</td>  
                     
                     <td style="color:aliceblue;" class="lastname" data-id2="'.$row["lastname"].'" contenteditable>'.$row["lastname"].'</td>  
                     
                     <td style="color:aliceblue;" class="email" data-id3="'.$row["email"].'" contenteditable>'.$row["email"].'</td>
                     
                     <td style="color:aliceblue;" class="password" data-id4="'.$row["pwd"].'" contenteditable>'.$row["pwd"].'</td>
                     
                     <td style="color:aliceblue;" class="password" data-id5="'.$row["type"].'" contenteditable>'.$row["type"].'</td>
                     
                     
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete_users">Delete this User</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td style="color:aliceblue;" id="firstname" type="text" contenteditable></td>  
                <td style="color:aliceblue;" id="lastname" contenteditable></td> 
                <td style="color:aliceblue;" id="email" contenteditable></td>  
                <td style="color:aliceblue;" id="password" contenteditable></td>
                
                <td style="color:aliceblue;" id="type" contenteditable></td>
                
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add New User</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>