<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="Assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <!-- Our background_image.css for background images  -->
    <link rel="stylesheet" href="Assets/Design/CSS/Background_image.css" >
    <!-- Our button-animation.css for creating and animating buttons -->
    <link rel="stylesheet" href="Assets/Design/CSS/animations.css"> 
    <!--Bootstrap min.js-->
   <script src="Assets/bootstrap-3.3.7-dist/jQuery/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="Assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
    <title>Xasion's Fashions</title>

</head>
<body>
    <div class="fade-in-animations">
     
     <!--Nanigation bar inverse and navbar fixed at the top-->
       <div class="navbar navbar-inverse navbar-fixed-top">
<!--           Simple-->
            <div class="container">
                <a href="#" class="navbar-brand">Xasion Fashion 's</a>
                
                <button class="navbar-toggle" data-toggle = "collapse" data-target = " #aligarhnav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
                </button>
                <div class="collapse navbar-collapse" id="aligarhnav">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Meetup<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="https://www.collaborizm.com/project/B1FKIC2tx">Our Webinars</a></li>
                                 <li><a href="https://www.collaborizm.com/project/B1FKIC2tx">Our Meetup program</a></li>
                                 <li><a href="https://www.collaborizm.com/project/B1FKIC2tx">Join our Community</a></li>
                             </ul>
                        </li>
                         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Store<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="Contents/Shirts.php">T-Shirts</a></li>
                                 <li><a href="Contents/watch.php">Watches</a></li>
                                 <li><a href="Contents/kurta.php">Kuta and Sherwani</a></li>
                                 <li><a href="Contents/jeans.php">Jeans</a></li>
                                 <li><a href="Contents/glasses.php">Sun Glasses</a></li>
                                 <li><a href="Contents/bodyspray.php">BodySpray</a></li>
                                 
                             </ul>
                        </li>
     
                          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Apps<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="https://play.google.com/store?hl=en">Android</a></li>
                                 <li><a href="https://itunes.apple.com/us/app/apple-store/id375380948?mt=8">IOS for iphone</a></li>
                                 <li><a href="https://www.microsoft.com/en-us/store/apps">Windows phone 10 app</a></li>
                             </ul>
                        </li>
                        <li><a href="#aboutus">About us</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <?php if(isset($_SESSION['firstname_session'])){
                            echo "Welcome ".$_SESSION['firstname_session']." ".$_SESSION['lastname_session'];
                            }else{
                            echo "<li><a href='Applications_Pages/Signup.php'><span class='glyphicon glyphicon-user' ></span> Sign Up</a></li>
                       <li><a href='Applications_Pages/login.php'><span class='glyphicon glyphicon-log-in'></span> Log in</a></li>";
                            } ?> <span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="Applications_Pages/logout.php">log out</a></li>
                             </ul>
                        </li>
<!--
                        <li><a href="Applications_Pages/Signup.html"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
                        <li><a href="Applications_Pages/login.html"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
-->
                    </ul>
                </div>
            </div>
        </div>
        <!--End Navigation-->
        <!--Starting backgroung image-->
        <div id="background-home-image" >
            <!--Starting Container-fluid class of bootstrap-->
           <div class="container-fluid">
            <!--Starting row for using column class of bootstrap-->
           <div class="row">
             <!--Starting column sm for tablets 6-->
              <div class="col-sm-6">
               <!--First Heading text Class-->
                <div class="home-heading-text ">
                   <p>Xasion's Fashion's</p>
                   <!--Ending First Heading text Class-->
                </div>
                <!--adjusting home content-->
                <div class="home-content-xasion-phone">
                    <p>Xasion is now in your phone!</p>
                <!--End adjusting home content-->
                </div> 
                <!--adjusting Buy Content-->
                <div class="Buy-items-content">
                    <p>Buy your favourite items in mobo apps</p>
                <!--end buy content-->
                </div>
                <!--starting btns group-->
                 <div class="btns-adjust-responsive">
                 <!--In this group i have three links and bootstrap buttons-->
                  <a href="#" class="btn btn-first">Android App</a><br>
                  <a href="#" class="btn btn-second ">Windows desktop app</a><br> 
                  <a href="#" class="btn btn-third ">Windows Phone App</a> 
                  <!--Ending Group--> 
                  </div>
                  <!--Ending column-->
             </div>
             <!--starting and ending column sm for tablets 6-->
             <div class="col-sm-6"></div>
         <!--Ending row-->
         </div>     
        <!--Ending container-fluid-->
      </div>
      <!--Ending bacground home page-->
   </div>
   <!--Ending fade in animation end-->
</div>
   <!--again starting fade in animation-->
   <div class="fade-in-animations">
     <!--Backgound image adjusting-->
      <div id="background-home-image2" >
     <!--Statrting container fluid-->
       <div class="container-fluid">
      <!--Starting row-->
      <div class="row">
         <!--starting and ending column sm for tablets 6-->
          <div class="col-sm-6">
          </div>
          <!--starting and ending column sm for tablets 6-->
          <div class="col-sm-6">
          <!--Text Header-->
          <div class="head-spring-summer">Spring Summer Collection
          <!--Ending TextHeader -->
          </div>
          <!--2nd Para line-->
          <div class="title-buy-50-disc">Buy Your items with 50% discount
          <!--Ending 2nd para line-->
          </div>
          <!--paragraph main-->
          <div class="content-paragraph"> <p>Our service is to provide best product for you</p><br>                                  
              <p>Our firm create design and print tshirts, bags, shoes, watch's</p><br>
              <p>In this Summer offer ! We announced every tshirts, jeans and towers</p><br>
              <p>and any other product buy with 50% discount !</p> <br>
                                          <p>So! Why you are waiting for just buy our items Now ! <!--Ending Paragraph main--></div><br>
            <!--Buttton group-->
            <div class="btn-responsive-buy-now">
            <!--fisrt button Buy now-->
            <div class="btn buy-now-btn">Buy Now!
             <!--Ending first button Buy Now-->
             </div>
             <!--Ending Group button-->
              </div>
          <!--ending sm for tablet 6-->
          </div>
          <!--Ending container fluid-->
          </div>
        <!--ending row-->
      </div>
      <!--Ending Background image2-->
   </div>
   <!--Ending fade in animation-->
 </div>    
    
    
    
    
 <!--===========================SLIDE 3===================================================-->
 
    
    
    
    
  <!--Again start fade in animation-->
   <div class="fade-in-animations">
   <!--adjusting background home image 3-->
    <div id="background-home-image3">
       <!--APPLY RULES of bootstrap by using container-fluid-->
        <div class="container-fluid">
        <!--Creating rows-->
         <div class="row">
          <!--Define columns by 6-->
           <div class="col-sm-6">
           <!--Starting and Ending heading-->
            <div class="heading-design-print">Our Design Print's Much Better </div>
               <!--Adjusting content and create contents-->
                <div class="content-text"><p>We can create our our prints shows our creativity</p>
                                         <p>and design pattern so what the design is match our shirt.</p>
                                         <p>You can select and order your products easily in here.</p>
                <!--Ending content-->
               </div>
               <!--Creating button of order now-->
               <div class="btn-control-third-slide">
                  <!--Adding class amd create button of using slide 2 button-->
                   <div class="btn buy-now-btn">Order Now!</div>
                   <!--Ending order now button-->
               </div>
            <!--Ending Column by 6-->   
        </div>
        <!--Starting and Ending column byy 6-->
        <div class="col-sm-6"></div>
        <!--Ending row-->
    </div>
       <!--Ending Container-fluid-->
        </div>
        <!--Ending Background image3-->
       </div>
       <!--Ending fade in animation-->
    </div>
    
    
    
    
  <!--==============================SLIDE 4===============================================-->
    
    
    
    
   <!--Again start fade in animation-->
  <div class="fade-in-animations">
     <!--Adjusting-background-image-->
      <div id="background-home-image4">
         <!--Apply rules as a container-fluid-->
          <div class="container-fluid">
             <!--Creating rows-->
              <div class="row">
                 <!--Creating and ending cloumn by 2-->
                  <div class="col-sm-2"></div>
                  <!--Creating column by 8 as a center-->
                  <div class="col-sm-8">
                     <!--Adjusting heading content-->
                      <div class="Heading-content4">Buy your favourite items with our Discount Card</div>
                       <!--Adjusting 2nd line content-->
                        <div class="second-content-slide-4"> 
                            <a href="#" class="fifty-percent">50%<a href="#" class="discount"> Discount <a href="#" class="fifty-percent">!</a></a></a></div>
                            <!--Adjusting paragraph content-->
                        <div class="third-line-para-slide-4">
                            <p>In this card package our company allow users to buy</p><br>
                            <p>Gifts, shoes, clothes and any other item with 50% discount package.</p><br>
                            <p>Want to buy our discount card</p>
                        </div>
                        <!--Adjusting button content-->
                   <div class="button-control-slide-four">
                       <!--Creating Button and Button Stye-->
                         <div class="btn btn-slide4-shop-now">Shop Now !</div>
                      <!--Ending Adjustment Button content-->
                      </div>
                      <!--Ending column by 8 as a center-->
                  </div>
                  <!--Creating and Ending column by 2-->
                  <div class="col-sm-2"></div>
                  <!--Ending rows-->
              </div>
              <!--Ending Container-fluid-->
          </div>
          <!--Ending background image-->
      </div>
      <!--Ending fade in animation-->
  </div>
    
    
    
  <!--=============================SLIDE 5===============================================-->
    
    
    
    
  <!--Adding fade in animation-->
  <div class="fade-in-animations">
      <!--Adding background of slide5-->
      <div id="background-home-image5">
           <!--Adding container-fluid for using rows-->
          <div class="container-fluid">
            <!--Adding rows to creating colums-->
              <div class="row">
                  <!--Creating text of categories slide 5 all over the rows-->
                  <div class="content-text-slide-5">
                          <p>Categories</p>
                      <!--Ending Categories text-->
                      </div>
                  <!--Creating class by column 4-->
                  <div class="col-sm-4">
                      
        <!--==============================SHIRT IMAGE CATEGORIES======================-->
                      
                      <!--Adjusting shirt image categories and animations classes-->
                      <a href="Contents/Shirts.php">
                     <div class="shirt-image-categories text-center image-anim-box-slide-5">
                         <!--Adding image of shirt-->
                         <img src="Assets/Design/images/Categories/4.png" class="img-rounded img-responsive" width="300px" height="150px">
                         <!--Adding animation when i hover an image of shirts-->
                        <div class="opacity-text-animation">
                            <p>Shirts</p>
                            <!--closing animation of text hover-->
                        </div>
                         <!--Closing adjusting shirt image categories-->
                          </div></a>
                      
        <!--==============================SHOES IMAGE CATEGORIES======================-->              
                      <!--adjusting shoes image categories and animation classes-->
                      <a href="Contents/bodyspray.php">
                     <div class="shoes-image-categories text-center image-anim-box-slide-5">
                         <!--Adding image of shoes-->
                         <img src="Assets/Design/images/Categories/2.jpg" class="img-rounded img-responsive" width="300px" height="150px">
                         <!--Adding animation when i hover an images of shoes-->
                         <div class="opacity-text-animation">
                            <p>bodyspray</p>
                             <!--Closing animation of hover image-->
                        </div>
                         <!--Closing shoes image categories-->
                         
                     </div>
					  </a> 
                      <!--Closing column 4 -->
                          </div>
            
                  
        <!--==============================WATCH IMAGE CATEGORIES======================-->
                  
                  <!--Creating Class by coumn 4-->
                  <div class="col-sm-4">
                      <!--Adjusting watch image categories and animation classes-->
                      <a href="Contents/watch.php">
                      <div class="watch-image-categories text-center image-anim-box-slide-5">
                          <!--Adding image of watch-->
                          <img src="Assets/Design/images/Categories/1.png" class="img-rounded img-responsive" width="300px" height="150px">
                          <!--Adding animation when i hover an image of watch-->
                          <div class="opacity-text-animation text-center">
                              <p>Watches</p>
                              <!--Closing animation of hover image-->
                          </div>
                          
                          <!--Closing watch image categorie-->
                      </div>
                      </a>
                      
        <!--==============================JEANS IMAGE CATEGORIES======================-->
                      
                      <!--Adjusting watch image categores and animation classes-->
                      <a href="Contents/jeans.php">
                      <div class="jeans-pants-image-categorie text-center image-anim-box-slide-5">
                          <!--Adding image of Jeans-->
                          <img src="Assets/Design/images/Categories/5.png" class="img-rounded img-responsive" width="300px" height="150px">
                          <!--Adding animation  when i hover an image of jeans-->
                          <div class="opacity-text-animation text-center">
                              <p>Jeans</p>
                              <!--Closing animation of hover image-->
                          </div>
                          <!--Closing jeans image categorie-->
                      </div>
					  </a>
                      <!--Closing column by 4-->
                    </div>  
                  
        <!--==============================SWEATER IMAGE CATEGORIES======================-->
      
                <!--Creating Column by 4-->
                  <div class="col-sm-4">
                      <!--Adjusting sweater image categories an animations classes-->
                      <a href="Contents/kurta.php">
                      <div class="sweater-winter-categorie text-center image-anim-box-slide-5" >
                          <!--Adding image of sweater-->
                          <img src="Assets/Design/images/Categories/kurta.jpg" class="img-rounded img-responsive" width="300px" height="150px">
                          <!--adding animation when i hover an image of sweater-->
                          <div class="opacity-text-animation ">
                              <p>kurta and Sherwani</p>
                              <!--Closing animatiopn of hovwer image-->
                          </div>
                          <!--Closing jeans image categories-->
                      </div>
					  </a>
                      
         <!--==============================MENS KIT IMAGE CATEGORIES======================-->
                      
                      <!--Adjusting mens kit image categorie an animation of classes-->
                      <a href="Contents/glasses.php">
                      <div class="mens-kit-categorie text-center image-anim-box-slide-5">
                          <!--Adding mens kit image-->
                          <img src="Assets/Design/images/Categories/6.jpg" class="img-rounded img-responsive" width="300px" height="150px">
                          <!--Adding animation when i hover an image of mens kit-->
                          <div class="opacity-text-animation text-center">
                              <p>Sun Glasses</p>
                              <!--Closing animation of hover image-->
                          </div>
                          <!--Closing mens kit categories-->
                      </div>
					  </a>
                      <!--Closing column by 4-->
                  </div>
                  
        <!--==============================ENDING CATEGORIES======================-->
                  
                <!--Ending row-->
              </div>
              <!--Line break-->
              <br>
              <!--See more option button-->
              <div class="see-more-option">
                  <!--Link-->
                      <a href="#" class="text-color-option">See more !</a>
              <!--Closing see more option-->
              </div>
            <!--Closing container-fluid-->
          </div>
          <!--Closing backgroung image-->
      </div>
      <!--Closing Fade in animation-->
  </div>
    
    
    
    
<!--===============================SLIDE 6===============================================-->
  
    
    
    
  <div class="fade-in-animations">
      <div id="background-home-image6">
         <div class="container-fluid">
          <div class="row">
               <div class="community-text-meet-up">
                   <p>Meet Our Community</p>
               </div>
            <div class="col-sm-6">
                <div class="our-developers-box">
                   <a href="http://inconnent12345.wixsite.com/welcome/blog">
                    <img src="Assets/Design/images/Our-team/Developers.png" class="img-responsive" width="350px" height="175px">
                    </a>
                </div>
                <div class="developer-text">
                    <p>Our Developers team</p>
                    <p>help if there is in any mistake</p>
                    <p>Submit your problem's to our developer's</p>
                    <p>Our developer community</p>
                    <p>solve your problems in some time.</p>
                </div>
            </div>
            <div class="col-sm-6">
                 <div class="our-designers-box">
                    <a href="https://www.behance.net/inconnent1ca27">
                     <img src="Assets/Design/images/Our-team/Designers.png" class="img-responsive " width="350px" height="175px">
                     </a>
                 </div> 
                 <div class="designer-text">
                     <p>Our Designer's Team</p>
                     <p>Help if there is in any mistake in UX</p>
                     <p>Submit our problems to our designer's.</p>
                    <p>Our Designer's Community</p>
                    <p>Solve your problem in some time.</p>
                  </div>
            </div>
          </div>
          </div>
      </div>
<!--===============================SLIDE 7===============================================-->
  
  <div class="fade-in-animations">
      <div id="background-home-image7">
          <div class="container-fluid">
              <div class="heading-text-slide-7">
                  <p>Watch Our Video ' How easy for you! '</p>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                        <div class="text-slide7-paragraph">
                            <p>You can use our softwares to buy!</p>
                            <p>Our itmes or you can use our mobo apps</p>
                            <p>to buy our product's</p>
                            <p>Even! you can watch our video how to buy our product's</p>
                            <p>and how to install our software and app in your pc</p>
                            <p>and in your mobo app's</p>
                        </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="youtube-video">
                         <br>
                         <br>
                         <br>
                         <br>
                         <br>
                         
                          <iframe width=450 height=250 src='https://usamaliaquat.sharepoint.com/portals/hub/_layouts/15/VideoEmbedHost.aspx?chId=c2c4d6e7%2D5b7b%2D4186%2Dbc4f%2D94da1706b047&amp;vId=56926eae%2De66c%2D4636%2Db00c%2Df56807721b60&amp;width=640&amp;height=360&amp;autoPlay=false&amp;' allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
          </div>
          </div>
      </div>
<!--==============================SLIDE 8===============================================-->
  
  <div class="fade-in-animations">
      <div id="background-home-image8">
        <div class="container-fluid">
            <div class="text-heading-slide8">
                <p>See Our Company in Map</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                   <div class="google-map embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1809.2433800745985!2d67.09032633213339!3d24.91548255115799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe64788ba1b9a4723!2sAligarh+Institute+Of+Technology!5e0!3m2!1sen!2s!4v1488712773792" width="450" height="225"></iframe>
                 </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-slide8-paragraph">
                        <p>You can see our company address in Google map<br>
                        Want to visit our company why you are waiting for<br>
                        Our team welcome your members to visit our company<br>
                        for additional information!</p>
                    </div>
                    <div class="btn-see-our-address-in-google-map">
                       <a href="https://www.google.com/maps?ll=24.915262,67.091413&z=19&t=h&hl=en-US&gl=US&mapclient=embed&cid=16593381684978272035">
                           <div class="btn btn-see-map">See our map!</div></a>
                    </div>
                </div>
            </div>
            
        </div>
      </div>
  </div>
<!--==============================SLIDE 9===============================================-->
<div class="fade-in-animation" id="aboutus">
    <div class="background-home-image9">
        <div class="container-fluid">
           <div class="text-heading-about-us-slide-9">
               <p>About Us</p>
           </div>
            <div class="row">
               <div class="margin-of-logos">
                <div class="col-sm-3">
                    <div class="logo-address">
                        <img src="Assets/Design/images/about-us-images/location.png" width="25px" height="25px">
                    </div>
                    <div class="address-heading-text-slide9">
                        <p>ADDRESS</p>
                    </div>
                    <div class="address-text-slide-9">
                        <p>Nipa Chorangi<br>
                           Aligarh Institute<br>
                           Of Technology<br>
                           Pakistan,Karachi</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="logo-phone">
                        <img src="Assets/Design/images/about-us-images/phone.png" width="25px" height="25px">
                    </div>
                    <div class="phone-heading-text-slide-9">
                        <p>PHONE</p>
                    </div>
                    <div class="phone-text-slide9">
                        <p>Phone : (021)34973414<br>
                           Moblie :(92-317)2125702<br>
                             Fax:</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="logo-contact">
                        <img src="Assets/Design/images/about-us-images/contact.png" width="25px" height="25px">
                    </div>
                    <div class="contact-heading-slide9">
                        <p>CONTACTS</p>
                    </div>
                    <div class="contact-text-slide-9">
                        <p>usamaliaquat@Microsoft.com<br>
                        @usamaliaquat9<br>
                        inconnent12345@outlook.com</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="logo-working-hours">
                        <img src="Assets/Design/images/about-us-images/clock.png" width="25px" height="25px">
                        <div class="heading-working-hours">
                            <p>WORKING HOURS</p>
                        </div>
                        <div class="hour-text-slide9">
                            <p>Monday-Friday: 12:00AM to 4:00AM<br>
                                Saturday: 11:00PM to 17:00AM<br>
                                Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'Sucess=feedback') !== false){
                    echo "<div class='thanks-subscribers'>
           <p>Thanks for your feedback. Our Workers see your message and response to your email.</p>
       </div>";}
              
               ?>
        <form action="Applications_Pages/feedback.php" method="post">
            <div class="row">
                <div class="margin-slide-9-message">
                <div class="col-sm-4">
                  <div class="Name-textbox-slide-9">
                      <input class="Name-company-snd input-sm" type="text" name="name" placeholder="Name *" required>
                  </div>
                </div>
                </div>
                   <div class="margin-slide-9-message">
                <div class="col-sm-4">
                    <div class="Email-textbox-slide-9">
                         <div class="Name-textbox-slide-9">
                      <input class="Name-company-snd input-sm" type="email" name="email" placeholder="Email *" required>
                  </div>
                    </div>
                </div>
                </div>
                   <div class="margin-slide-9-message">
                <div class="col-sm-4 ">
                    <div class="Website-textbox-slide9">
                         <div class="Name-textbox-slide-9">
                      <input class="Name-company-snd input-sm" type="website" placeholder="Website">
                  </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="margin-slide-9-message">
                    <div class="col-sm-12">
                        <textarea class="form-message-text" rows="5" placeholder="Message *" name="message" required></textarea>
                        <div class="text-center">
                        <input type="submit" class="btn submit-btn " value="Submit Message">
                        </div>
                    </div>    
                </div>
                </div>
                </div>
        </form>
            
        </div>
    </div>
</div>
<!--=====================================Slide 10====================================-->

<div class="fade-in-animation">
   <div class="backgroubd-image10">
    <div class="container-fluid">
      
        <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'Sucess=subscriber') !== false){
                    echo "<div class='thanks-subscribers'>
           <p>Thank you for subcription.We will send daily updates in you email...</p>
       </div>";}
              
               ?>
               
        <div class="row">
            <div class="col-sm-6">
				<div class="News-letter-head">
				Newsletter
				</div>
                <div class="News-letter-para">
                <p>Subscribe to our company and stay up to date <br>
                    with all events comming straight into your mailbox</p>
                </div>
             </div>
             <form action="Applications_Pages/subscriber.php" method="post">
                <div class="col-sm-4">
                    <div class="margin-to-textbox-subscribe">
                        <input type="email" class="textbox-of-subsrcibe"  name="email" placeholder="Email*" required>
                    </div>
                    </div>
                <div class="col-sm-2">
                    <div class="subscribe-btn-of-slide-10">
                        <a href="#">
                        <input type="submit" class="btn subscribe-btn" value="Subscribe">
                        </a>
                    </div>
                </div>
            </form>
		
        </div>
    </div>    
</div>
</div>
<!--=====================================Slide 11====================================-->
<div class="fade-in-animation">
    <div class="background-home-image11">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="contact-heading-slide11">
                        <p><b>CONTACT</b> <img src="Assets/Design/images/small-tags/1.png" width="10px;"> </p>
                    </div>
                    <div class="logo-and-text-of-phone-slide11">
                        <p><img src="Assets/Design/images/small-tags/phone_25px.png" width="15px;"> <b>PHONE</b> : (92-317)2125702</p>
                    </div>
                    <div class="logo-and-text-of-fax-slide11">
                        <p><img src="Assets/Design/images/small-tags/fax_25px.png" width="15px"> <b>FAX</b> : </p>
                    </div>
                    <div class="logo-and-text-of-email-slide11">
                        <p> <img src="Assets/Design/images/small-tags/message_25px.png" width="15px"> <b>Email</b> : inconnent12345@outlook.com</p>
                    </div>
                    <div class="logo-and-text-of-website-slide11">
                        <p> <img src="Assets/Design/images/small-tags/link_25px.png" width="15px"> <b>Website</b> : <a style=" color: white; " href="http://inconnent12345.wixsite.com/welcome"> inconnent12345.wix.com/welcome</a></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="logo-and-text-of-location-slide11">
                        <p><img src="Assets/Design/images/small-tags/location_25px.png" width="35px">Nipa Chorangi Gulshan-e-Iqbal Near Sir Syed University Aligarh Institute Of Technology Karachi, Pakistan</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="email-us-heading">
                        <p><b>EMAIL US</b> <img src="Assets/Design/images/small-tags/1.png" width="10px;"> </p>
                    </div>
                  
                  
                  
                   <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         if(strpos($url,'Sucess=feedback') !== false){
                    echo "<div class='thanks-subscribers'>
           <p>Thanks for your feedback.</p>
       </div>";}
              
               ?><div class="logo-and-text-of-emailus-slide11">
                        <form action="Applications_Pages/feedback.php" method="post">
                        <input type="text" placeholder="Name" class="name-of-slide11"  name="name"required>
                        <input type="email" placeholder="Email" class="email-of-slide11-emailus-line" name="email" required>
                            <textarea class="textarea-of-slide11-line-emailus" name="message" placeholder="Message" rows="8" required></textarea>
                        <input type="submit" class="btn btn-slide11-line-emailus" value="Submit"> 
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="Newsletter-heading">
                        <p><b>NEWSLETTER</b> <img src="Assets/Design/images/small-tags/1.png" width="10px;"> </p>
                    </div>
                    
                     <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 if(strpos($url,'Sucess=subscriber') !== false){
                            echo "<div class='thanks-subscribers'>
                   <p>Thank you for subcription.</p>
                    </div>";}
              
               ?>
                       <div class="text-and-textbox-of-slide11-for-newsletter">
                        <p>Subscribe to our company and stay up to date<br>
                            With all events<br>
                            Comming straight in to your mailbox</p>
                        <form action="Applications_Pages/subscriber.php" method="post">
                        <input type="email" class="email-of-newsletter-slide11" placeholder="Email" name="email" required>
                        <input type="submit" class="btn btn-slide11-newsfeed" value="Subscribe">
                        </form>
                    </div>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="copyriyght-text-last-slide">
                        <p>Copyright : Ulcreative Softwares</p>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
      </div>
</div>      
</body>
</html>