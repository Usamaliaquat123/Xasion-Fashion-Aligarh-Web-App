<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shirts Rack</title>
        <link rel="stylesheet" href="Contents_Assets/css/shirts_mainpage.css">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="Contents_Assets/bootstrap/css/bootstrap.min.css">
  <!--Bootstrap min.js-->
   <script src="Contents_Assets/bootstrap/jQuery/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="Contents_Assets/bootstrap/js/bootstrap.min.js"></script>
  
    </head>
    <body>
        <div class="background-image">
            <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">
                
                <div class="navbar-header">
                <button class="navbar-toggle" data-toggle = "collapse" data-target = "#aligarhnav">
                
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                    
                </button>
                     <a href="../index.php" class="navbar-brand">Xasion Fashion 's</a>
                </div>
                <div class="collapse navbar-collapse" id="aligarhnav">
                
                

                    <ul class="nav navbar-nav navbar-right">
                    
                       <li><a href="MyCart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
               
                    
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <?php if(isset($_SESSION['firstname_session'])){
                            echo "Welcome ".$_SESSION['firstname_session']." ".$_SESSION['lastname_session'];
                            }else{
                            echo "<li><a href='../Applications_Pages/Signup.php'><span class='glyphicon glyphicon-user' ></span> Sign Up</a></li>
                       <li><a href='../Applications_Pages/login.php'><span class='glyphicon glyphicon-log-in'></span> Log in</a></li>";
                            } ?> <span class="caret"></span></a>
                             <ul class="dropdown-menu">
                                 <li><a href="../Applications_Pages/logout.php">log out</a></li>
                             </ul>
                        </li>
  
                        
                          

                    </ul>
                </div>
            </div>
        </div>
       
      
  

       
       
       
     
       
       
       
       
       
       
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="heading-main">
                        <p>Buy t-Shirts Now!</p>
                    </div>
                    <div class="para">
                        <p>Buy our products with 50% Discount !</p>
                    </div>
                    <div class="center">
                    <div class="See-down-btn">
                        <img src="Contents_Assets/images/Shirts/icons/angle_down_96px.png" width="25px" height="25px"> See Down Below !
                    </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        </div>
        <div class="background-slide-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="Heading-content">
                            <p>T-Shirts</p>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                 <div class="row">
                 	<div class="col-sm-2"></div>
                 	<div class="col-sm-8" id="cart_msg">
                 		<!--Cart Message Delete-->
                 		
                 	</div>
                 	<div class="col-sm-2"></div>
                 </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                  <div id="get_product"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                       <br><a href="#">
                   
                        <div class="See-more-btn">
                         See More !
                           </div>
                        </a>
                    <br>
                    <br>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
        <div class="last-slide-credits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-credit">
                            <p>Credit : UX Dziner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
<script>
$(document).ready(function(){
    products();
    function products(){
        $.ajax({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {getproduct:1},
            success : function(data){
                $("#get_product").html(data);
            }
        })
		cart_count();
    }
    $("#search-btn").click(function(){
        var keyword = $("#search").val();
        if(keyword != ""){
            $.ajax({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {search:1,keyword:keyword},
            success : function(data){
                $("#get_product").html(data);
            }
        })
        }
    })
    $("body").delegate("#products-of-cart","click",function(event){
        event.preventDefault();
        
        var p_id  = $(this).attr('pid');

        $.ajax
        ({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {addProductCart:1, proId: p_id},
            success : function(data){
                $('#cart_msg').html(data);
            }
        })
    })
	
	
	
    	
		
	
    
//    $("#cart_container").click(function(event){
//        event.preventDefault();
//        $.ajax({
//            url: "Contents_Assets/backend/action.php",
//            method:"POST",
//            data : {get_cart_product:1},
//            success : function(data){
//               $("#cart_data").html(data);
//            }
//        })
//    })
});
</script>