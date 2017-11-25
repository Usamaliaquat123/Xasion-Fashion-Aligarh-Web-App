<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Xasions Sherwani</title>
	<link rel="stylesheet" href="Contents_Assets/css/jeans.css">
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
                
                 <form class="navbar-form navbar-left " role="search">
                    <div class="form-group">
                          <input type="text" id="search" class="form-control" placeholder="Search">
                    </div>
                        <button type="submit"  id="search-btn" class="btn btn-primary">Submit</button>
                  </form>

                    <ul class="nav navbar-nav navbar-right">
                    
                       <li><a href="MyCart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a></li>
               
                    
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
				<div class="col-sm-12">
					<div class="Heading-main-bodyspray">
						<p>Buy Jeans !</p>
					</div>
					<div class="para">
						<p>Buy our products with 50% Discount !</p>
					</div>
					<div class="See-down-btn">
						See More !
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="background-slide-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="Heading-content">
						<p>Jeans</p>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
		<br>
			<br>
		<div class="container-fluid">
			<div class="row">
			<br>
				<div id="get_product"></div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<br>
					<div class="See-more-btn">
						See More!
					</div>
					<br>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</div>
	<div class="last-slide-credits">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="content-credit">
						<p>Credits: UX Dziner</p>
					</div>
				</div>
				<div class="col-sm-4"></div>
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
            data : {getproductjeans:1},
            success : function(data){
                $("#get_product").html(data);
            }
        })
    }
	
	  
      $("body").delegate("#products-of-cart-jeans","click",function(event){
        event.preventDefault();
        
        var p_id  = $(this).attr('pidjeans');
       
        $.ajax
        ({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {addProductCartjeans:1, proIdjeans: p_id},
            success : function(data){
                alert(data);
            }
        })
    })
});
</script>