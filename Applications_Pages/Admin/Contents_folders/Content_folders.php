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
        <link rel="stylesheet" href="Content-folder.css">
      <!-- bootstrap CSS -->
        <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">
      <!--Bootstrap min.js-->
      <script src="../Assets/bootstrap/jQuery/jquery.min.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="../Assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Menu_apps/javascript/ajax.js"></script>
   
    </head>
    <body>
                    

          
<!--          <hr class="line" >-->
<div class="background">
<div class="fade-in-animations">
    <div class="Content-session">
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-sm-12">
        			<div class="Heading-foldr">
        				<p>Folders</p>
        			</div>
        		</div>
        	</div>
        </div>
        <br>
        <br>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-sm-4">
        			<div class="folder-heading-cntnt">
        				<p>Application_Pages</p>
        				<br>
        				<p>Assets</p>
        				<br>
        				<p>Contents</p>
        				<br>
        				<p>Payment_methods</p>
        				<br>
        				<p>SQL</p>
        				
        				
        			</div>
        		</div>
        		<div class="col-sm-8">
        			<div class="desc-folder-ech">
        				<p>This folder defines all the content including Admin Pannel.</p>
        				<br>
        				<p>In this folder we an arrange bootstrap files and other css stuff.</p>
        				<br>
        				<p>This folder contains categories of shop / store.</p>
        				<br>
        				<p>This folder containes all the payment stuff.</p>
        				<br>
        				<p>This folder containes all the database including tables.</p>
        			</div>
        		</div>
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
        <a href="../Admin-pannel.php">
          <div class="background-chart-logo">
               <div class="chart-logo">
                   <img src="../Assets/images/logos/Menu/Chart.png" width="20px" height="20px">
                </div>
                <div class="para-chart-logo">
                    <p>Analytics</p>
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
        <a href="../Database_tables/index.php">
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