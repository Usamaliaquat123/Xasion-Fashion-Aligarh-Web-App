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
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
       <!--Bootstrap min.js-->
   <script src="Assets/bootstrap-3.3.7-dist/jQuery/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
   <script src="Assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <!--Internal links-->
    <link rel="stylesheet" href="../Assets/Design/CSS/sign-up-page.css">
        <!--Calling animation class-->
    <link rel="stylesheet" href="../Assets/Design/CSS/animations.css">
        <!--Page title-->
    <title>Sign Up Now !</title>
    </head>
    <body>
        <div class="fade-in-animations">
           <div class="background-image-signup">
                <?php
                   $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url,'error=empty') !== false){
                    echo "please fill all controls";
                }elseif(strpos($url, 'error=email') !== false){
                    echo "<div class='header'>
                   <p>You Already have an account!<a href='login.php'> login</a></p>
               </div>";
                }elseif(strpos($url,'error=firstname') !== false){
                    echo "<div class='header'>
                   <p>Name already exists</p>
               </div>";}
                 elseif(strpos($url,'Sucess=registered') !== false){
                     echo "<div class='header-sucess'>
                   <p>Thanks for registration. You are Sucessfully register!<a href='login.php'> login</a></p>
               </div>";
                 }elseif(strpos($url,'error=Password_mismatch') !== false){
                    echo "<div class='header'>
                   <p>Password not matched!</p>
               </div>";}   
                   ?>
               <form action="back/signup.inc.php" method="post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="signup-text">
                                <p>SIGN UP</p>
                            </div>
                 
                            <hr class="line0">
                            <div class="text">
                             <input type="text" class="input-first-name" placeholder="First Name" name="firstname" required>
                            
                             <input type="text" class="input-last-name" placeholder="Last Name" name="lastname" required>
                            
                             <input type="email" class="input-type-email" placeholder="Email" name="email" required>
                            
                             <input type="password" class="input-type-password" placeholder="Password" name="password" required>
                                
                             <input type="password" class="input-type-password" placeholder="Confirm Password" name="cfm_password" required>
                          </div> 
                            
                        </div>
                     <div class="col-sm-4"></div>
                    </div>
                 </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="submit-fields">
                                <a href="../index.html">
                            <input type="button" class="btn btn-cancel" value="Cancel">
                                </a>
                           <input type="submit" class="btn btn-submit-signup submit" value="Signup">
                            </div>
                                <div class="text-field-login">
                                    <p>If you already register please <a href="login.php" class="login-text-link" >log in</a></p>
                                </div>
                              
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                   </div>
                   
               </form>
            </div>
        </div>
    </body>
</html>