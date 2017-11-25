<?php
 session_start();
    if(isset($_SESSION['firstname_session'])){
        header("location: ../index.php");
    }

?>


<!DOCTYPE html>
<html>
    <head lang="en">
      <meta charset="utf-8" />
      <title>Log in Connect with us!</title>
      <link rel="stylesheet" href="../Assets/Design/CSS/sign-in-page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
       <!--Bootstrap min.js-->
   <script src="Assets/bootstrap-3.3.7-dist/jQuery/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
   <script src="Assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
     <!---animation file --->
        <link rel="stylesheet" href="../Assets/Design/CSS/animations.css">
    </head>
    <body>
        <div class="fade-in-animations">
            <div class="background-image-signin">
               <form action="back/signin.inc.php" method="post">
                <div class="container-fluid">
                   <?php
                   $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'error=not_registered') !== false){
                    echo "<div class='header'>
                   <p>Email and Password is incorrect!</p>
               </div>";
                } ?>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="heading-signin">
                                <p>Sign in</p>
                            </div>
                            <hr class="line0">
                            
                              <input type="email" class="input-type-email input1" placeholder="Email" name="email">
                            
                             <input type="password" class="input-type-password input1" placeholder="Password" name="password">
                         
                            
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div> 
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="submit-field">
                                <input type="submit" class="btn-submit-signup" value="Log in">
                            </div>
                            <div class="text-fields">
                                <p>If you are not register in xasions fashions.<a href="../Applications_Pages/Signup.html" class="link-signup">Sign up</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>