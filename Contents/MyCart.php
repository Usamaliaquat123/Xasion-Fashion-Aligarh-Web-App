<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Cart</title>
        <link rel="stylesheet" href="Contents_Assets/css/cart_mainpage.css">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="Contents_Assets/bootstrap/css/bootstrap.min.css">
  <!--Bootstrap min.js-->
   <script src="Contents_Assets/bootstrap/jQuery/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="Contents_Assets/bootstrap/js/bootstrap.min.js"></script>
  
    </head>
    <body>
      
      
       <div class="background-image-cart">
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-4">
                  <a href="../index.php">
                   <div class="brand">
                       <p>Xasion Fashion's</p>
                   </div>
                   </a>
               </div>
               <div class="col-sm-4"></div>
               <div class="col-sm-4"></div>
           </div>
       </div>
       

              
       
       
       <div class="header">
       	<p></p>
       </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                   <div class="heading-cart-slide1">
                       <p>My Shopping Cart</p>
                   </div>
                    <div class="background-logo-cart">
                        <img src="Contents_Assets/images/cart/logo/shopping-cart.png" width="100px" height="100px">
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        </div>
        <div class="background-slide2-cart">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="Heading-Product">
                            <p>My Collections</p>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                 	<div class="col-sm-2"></div>
                 	<div class="col-sm-8" id="cart_msg">
                 		<!--Cart Message Delete-->
                 		
                 	</div>
                 	<div class="col-sm-2"></div>
                 </div>
                 <div class="row">
                     <div class="col-sm-1">
                         <div class='heading-no'>
                             <p>S:No</p>
                         </div>
                    </div>
                     <div class="col-sm-2">
                         <div class='Product-image'>
                            <p>Produuct View</p>
                         </div>
                     </div>
                     <div class="col-sm-2">
                       <div class='heading-Quantity'>
                                <p>Quantity</p>
                          </div>
                     </div>
                     <div class="col-sm-2">
                           <div class='heading-categorie'>
                             <p>Categorie</p>
                         </div>
                     </div>
                     <div class="col-sm-2">
                         <div class='Product-Name'>
                             <p>Product Name</p>
                         </div>
                     </div>
                     <div class="col-sm-2">
                          <div class='Product-Price'>
                             <p>Price</p>
                         </div>
                     </div>
                     <div class="col-sm-1">
                           <div class='heading-del'>
                           <p>Delete</p>
                       </div>
                     </div>
                 </div>
                 <div id="get_product">
                     
                 </div>
                
                  
                
            </div>
            <br>
            <br>
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-sm-7"></div>
            		<div class="col-sm-2"></div>
            		<div class="col-sm-3">
            		<form method="post" action="/WebSiteSource/Payment_method/payment_method.php">
            			<div class="style-checkout">
            			
            			<input type="submit" class="btn btn-primary" value="Proceed to Payment">
						</div>
						</form>
           		
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
		 var product_name  = $(this).attr('pid');
        $.ajax({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {get_cart_product:1, product_name:product_name},
            success : function(data){
                $("#get_product").html(data);
            }
        })
    }
       
        
//    $(document).on('click', '.btn_delete_cart', function(){ 
//       
//           var idme=$(this).data("id6");  
//                $.ajax({  
//                     url:"delete.php",  
//                     method:"POST",  
//                     data:{id1:idme},  
//                     dataType:"text",  
//                     success:function(data){  
//                            
//                          fetch_data();  
//                          products();
//                     }  
//                });  
//       
//      });
        
    $("body").delegate(".qty","keyup",function(){
		
        var pid = $(this).attr("pid");
        var qty = $("#qty-"+pid).val();
        var price = $("#price-"+pid).val();
        var total = qty * price;
        $("#total-"+pid).val(total);
		var ttl = $(this).attr("totalamounts");
		alert (ttl);
    })
		
		
	$("body").delegate(".btn_delete_cart","click",function(event){
        event.preventDefault();
        
        var idme = $(this).attr("remove_id");
			
        $.ajax
        ({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {RemoveFromCart:1, Removeid: idme},
            success : function(data){
               $('#cart_msg').html(data);
				products();
            }
        });
    });
		
		$("body").delegate(".update_cart","click",function(event){
        event.preventDefault();
        
        var idme = $(this).attr("update_id");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = $("#total-"+pid).val();
			
			
        $.ajax
        ({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {UpdateProduct:1, Updateid: idme, qty:qty, price:price, total:total},
            success : function(data){
               $('#cart_msg').html(data);
			products();
            }
        })
    })
		
	

    
});
</script>




