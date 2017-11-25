<?php
session_start();
   if(!isset($_SESSION['firstname_session'])){
    header("location: ../redirect.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Hello css</title>
        <link rel="stylesheet" href="../Assets/css/style.css">
        <link rel="stylesheet" href="../Assets/css/menu.css">
        <link rel="stylesheet" href="../Assets/css/Content.css">
      <!-- bootstrap CSS -->
        <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
      <!--Bootstrap min.js-->
      <script src="../Assets/bootstrap/jQuery/jquery.min.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="../Assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="tables/database.css">
    </head>
    <body>
                    

   
          
<!--          <hr class="line" >-->
<div class="background">
<div class="fade-in-animations">          
<div class="Content-session">
    <div class="container-fluid">  
               <br />  
                <div class="table-responsive">
                    <div class="database_tables">
                        <p>Database Tables</p>
                    </div>  
                     <div class="h1-xasions-user">
                         <p>Xasions Users</p>
                    </div><br>
                     <div id="live_data"></div>                 
              </div>  
           </div> 
            <div class="container-fluid">  
               <br />  
                <div class="table-responsive">
                    
                     <div class="h1-xasions-Subs">
                         <p>Xasions Subscribers</p>
                    </div><br>
                     <div id="live_data_subs"></div>                 
              </div>  
           </div> 
            <div class="container-fluid">  
               <br />  
                <div class="table-responsive"> 
                     <div class="h1-xasions-feedback">
                         <p>Xasions Feedback</p>
                    </div><br>
                     <div id="live_data_feedback"></div>                 
              </div>  
           </div> 
           
        </div>
   
        </div>
        
        
        
        
        
 <div class="Header">
           <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-2">
                   <div id="Dashboard">
                       <a href="../Admin-pannel.php">
                         <div class="Heading-Dashboard-Header">
                         <p>Dashboard</p>
                          
                        </div>
                       </a>
                       </div>          
                   </div>
                   <div class="col-sm-7"></div>
                   <div class="col-sm-3">
            <div class="Admin-logo">
               <ul class="Hello navbar-nav navbar-right">
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="../Assets/images/logos/Admin-logo.png" width="30" height="30"><span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="../back-Admin/logout.php">Logout</a></li>
                                 
                             </ul>
                        </li>
                       </ul>
                       </div>
                   </div>
                   
               </div>
           </div>

             
          
        </div>
<!--=========================MENU-SECTION=================================-->
          
           <div class="setting_logo">
               <div class="logo">
                  <p>Xasion Admin</p>
               </div>
           </div>
           <div class="background-admin-logo">
               <div class="admin-logo">
                   <img src="../Assets/images/logos/Menu/User.png" width="23px" height="23px">
                   
               </div>
          </div>
          
    <div id="menu">
        <a href="../Analytics_Chart/Analytics_Chart.php">
          <div class="background-chart-logo">
               <div class="chart-logo">
                   <img src="../Assets/images/logos/Menu/Chart.png" width="20px" height="20px">
                </div>
                <div class="para-chart-logo">
                    <p>Analytics_Chart</p>
                </div>
           </div>
        </a>
        <a href="../User_Security/User_Security.php">
           <div class="background-locker-logo">
               <div class="locker-logo">
                   <img src="../Assets/images/logos/Menu/locker.png" width="20px" height="20px">
               </div>
               <div class="para-locker-logo">
                    <p>Users Security</p>
                </div>
           </div>
        </a>
        <a href="../Users/Users.php">
            <div class="background-users-logo">
                <div class="users-logo">
                   <img src="../Assets/images/logos/Menu/User.png" width="20px" height="20px">
               </div>
               <div class="para-users-logo">
                    <p>Users</p>
                </div>
            </div>
        </a>
        <a href="../Subscribers/Subscribers.php">
            <div class="background-images-logo">
               <div class="images-logo">
                   <img src="../Assets/images/logos/Content/subscribers.png" width="20px" height="20px">
               </div>
               <div class="para-images-logo">
                    <p>Subscribers</p>
                </div>
            </div>
        </a>
        <a href="index.php">
            <div class="background-database-logo">
               <div class="database-logo">
                   <img src="../Assets/images/logos/Menu/database.png" width="20px" height="20px">
               </div>
               <div class="para-database-logo">
                    <p>Database tables</p>
                </div>
            </div>
        </a>
        <a href="../posts/posts.php">
            <div class="background-pages-logo">
               <div class="pages-logo">
                   <img src="../Assets/images/logos/Content/posts.png" width="20px" height="20px">
               </div>
               <div class="para-pages-logo">
                    <p>Posts</p>
                </div>
            </div>
        </a>
        <a href="../Contents_folders/Content_folders.php">
            <div class="background-folder-logo">
               <div class="folder-logo">
                   <img src="../Assets/images/logos/Menu/Clients-folder.png" width="20px" height="20px">
               </div>
               <div class="para-folder-logo">
                    <p>Content folders</p>
                </div>
           </div>
        </a>
        <a href="../trash/trash.php">
            <div class="background-trash-logo">
               <div class="trash-logo">
                   <img src="../Assets/images/logos/Menu/trash.png" width="20px" height="20px">
               </div>
               <div class="para-trash-logo">
                    <p>Trash</p>
                </div>
            </div>
        </a>
        <a href="../Settings/Settings.php">
            <div class="background-settings-logo">
               <div class="settings-logo">
                   <img src="../Assets/images/logos/Menu/User_setting.png" width="20px" height="20px">
               </div>
               <div class="para-settings-logo">
                    <p>Settings</p>
                </div>
            </div>
        </a>
        </div>
            
                 
            <div class="slide-left">
                
            </div>
                  
        </div>
       
    </body>
</html> 
     
<script>
    //Xasions Users
$(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
            url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var firstname = $('#firstname').text(); var type = $('#type').text(); 
           var lastname = $('#lastname').text();  
           var email = $('#email').text();
           var password = $('#password').text();
        
           if(firstname == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(lastname == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }
          if(type == '')  
           {  
                alert("Enter Users type");  
                return false;  
           }  
           if(email == '')
           {
                alert("Enter Email");  
                return false;
           }
           if(password == '')
           {
               alert("Enter Password");
               return false;
           }
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{firstname:firstname, lastname:lastname, email:email, pwd:password, type:type },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      $(document).on('click', '.btn_delete_users', function(){  
           var id=$(this).data("id6");  

                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
       
      });  
 });  
</script>

     
<script>
    //Xasions Subscribers
$(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
            url:"Xasions_Subscribers/select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data_subs').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add_subs', function(){  
           var email = $('#email_subs').text();
        
           if(email == '')  
           {  
                alert("Enter Email");  
                return false;  
           }  
          
           $.ajax({  
                url:"Xasions_Subscribers/insert.php",  
                method:"POST",  
                data:{email:email},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      $(document).on('click', '.btn_delete_subs', function(){  
           var id=$(this).data("id2");  
         
                $.ajax({  
                     url:"Xasions_Subscribers/delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           
      });  
 });  
</script>
      

 <script>
    //Xasions Feedback
$(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
            url:"Xasions_Feedback/select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data_feedback').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add_feedback', function(){  
           var name = $('#name_feedback').text();  
           var email = $('#email_feedback').text();  
           var message = $('#message_feedback').text();
           
        
           if(name == '')  
           {  
                alert("Enter Your Name in feedback");  
                return false;  
           }  
           if(email == '')  
           {  
                alert("Enter Your Email in feedback");  
                return false;  
           }
           if(message == '')
           {
                alert("Enter Your Message in feedback");  
                return false;
           }
           
           $.ajax({  
                url:"Xasions_Feedback/insert.php",  
                method:"POST",  
                data:{name:name, email:email, message:message },  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      $(document).on('click', '.btn_delete_feedback', function(){  
           var id=$(this).data("id4");  
                $.ajax({  
                     url:"Xasions_Feedback/delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  

      });  
 });  
</script>              
                 

