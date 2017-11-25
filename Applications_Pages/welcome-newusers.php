<?php

  session_start();
if(!isset($_SESSION['firstname_session'])){
    header("location: ../index.php");
}
?>
   

   <html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
       <!--Bootstrap min.js-->
   <script src="../Assets/bootstrap-3.3.7-dist/jQuery/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
   <script src="../Assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <!--Internal links-->
    <link rel="stylesheet" href="../Assets/Design/CSS/welcome-new-users.css">
         <!--Calling animation class-->
    <link rel="stylesheet" href="../Assets/Design/CSS/animations.css">
        <!-- title-->
        <title>Welcome</title>
    </head>
    <body>
     
        <div class="fade-in-animations">
            <div class="navbar navbar-inverse navbar-fixed-top">
         
            <div class="container">
                <a href="#" class="navbar-brand">Welcome To Xasion Fashions</a>
                <button class="navbar-toggle" data-toggle = "collapse" data-target = " #aligarhnav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                </button>
                <div class="collapse navbar-collapse" id="aligarhnav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <?php if(isset($_SESSION['firstname_session'])){
                            echo "Welcome ".$_SESSION['firstname_session']." ".$_SESSION['lastname_session'];
                            
                                }else{
                            echo "Sign in or register";
                            } ?> <span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="#">Settings</a></li>
                                 <li><a href="logout.php">log out</a></li>
                             </ul>
                        </li>
                     </ul>
                </div>
                
            </div>
            
        </div>
           
            <div class="background-image">
              <div class="container-fluid">
                    <div class="row">
                      
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <hr class="line0">
                            <div class="headingtext-new-users">
                                <p>Categories</p>
                            </div>
                            <hr class="line1">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
