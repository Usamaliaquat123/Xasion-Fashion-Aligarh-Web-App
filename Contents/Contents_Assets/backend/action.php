<?php
$conn = mysqli_connect("localhost", "root", "", "xasion-registration-db");

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
session_start();
/*--Import shirts from database--*/












if(isset($_POST["getproduct"])){
    $product_query = "SELECT * FROM xasion_categorie_shirts";
    $run_query = mysqli_query($conn,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $product_id = $row['id'];
            $product_Name = $row['Name'];
            $product_price = $row['Price'];
            $product_image = $row['image'];
            echo "
               <div class='col-sm-3'>
                       <img src='Contents_Assets/images/Shirts/$product_image' width='100%'>
                        <div class='para-DandG'>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
           
                        <div style='cursor:pointer;' pid ='$product_id' id='products-of-cart' class='buy-now-btn'>
                         Add to Cart
                         </div>
          
                    </div>
                 </div>";
        }
    }
}

/*--Import Watches from database--*/

if(isset($_POST["getproductwatch"])){
    $product_query = "SELECT * FROM xasion_categorie_watch";
    $run_query = mysqli_query($conn,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $product_id = $row['id'];
            $product_Name = $row['name'];
            $product_price = $row['Price'];
            $product_image = $row['image'];
            echo "
               <div class='col-sm-3'>
               <br>
               <br>
                       <img src='Contents_Assets/images/Watches/$product_image' width='100%'>
                       
                        <div class='products'>
                       <br>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                        <div style='cursor:pointer;' pidwatch ='$product_id' id='products-of-cart-watch' class='buy-now-btn'>
                         Add to Cart
                         
                    </div>
                    </div>
                 </div>";
        }
    }
}

/*--==========Import KURTA from database========--*/
if(isset($_POST["getproductkurta"])){
    $product_query = "SELECT * FROM xasion_categorie_kurta";
    $run_query = mysqli_query($conn,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $product_id = $row['id'];
            $product_Name = $row['name'];
            $product_price = $row['Price'];
            $product_image = $row['image'];
            echo "
               <div class='col-sm-3'>
                       <img src='Contents_Assets/images/kurta/$product_image' width='100%'>
                        <div class='para-DandG'>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
           
                        <div style='cursor:pointer;' pidkurta ='$product_id' id='products-of-cart-kurta' class='buy-now-btn'>
                         Add to Cart
                         </div>
          
                    </div>
                 </div>";
        }
    }
}

/*--==========Import JEANS from database========--*/
if(isset($_POST["getproductjeans"])){
    $product_query = "SELECT * FROM xasion_categorie_jeans";
    $run_query = mysqli_query($conn,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $product_id = $row['id'];
            $product_Name = $row['name'];
            $product_price = $row['Price'];
            $product_image = $row['image'];
            echo "
			
               <div class='col-sm-3'>
                       <img src='Contents_Assets/images/jeans/$product_image' width='100%'>
                        <div class='para-DandG'>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
           
                        <div style='cursor:pointer;' pidjeans ='$product_id' id='products-of-cart-jeans' class='buy-now-btn'>
                         Add to Cart
                         </div>
          
                    </div>
                 </div>";
        }
    }
}

/*--==========Import bodyspray from database========--*/
if(isset($_POST["getproductbodyspray"])){
    $product_query = "SELECT * FROM xasion_categorie_bodyspray";
    $run_query = mysqli_query($conn,$product_query);
    if(mysqli_num_rows($run_query) > 0){
        while($row = mysqli_fetch_array($run_query)){
            $product_id = $row['id'];
            $product_Name = $row['name'];
            $product_price = $row['Price'];
            $product_image = $row['image'];
            echo "
			
               <div class='col-sm-3'>
                       <img src='Contents_Assets/images/bodyspray/$product_image' width='100%'>
                        <div class='para-DandG'>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
           
                        <div style='cursor:pointer;' pidjeans ='$product_id' id='products-of-cart-jeans' class='buy-now-btn'>
                         Add to Cart
                         </div>
          
                    </div>
                 </div>";
        }
    }
}




if(isset($_POST["addProductCart"])){
    $pid = $_POST["proId"];
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE product_id = '$pid' AND user_id = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
		}
      else{
			$sql = "SELECT * FROM xasion_categorie_shirts WHERE id = '$pid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
                  $product_id = $row['id'];
                  $product_name = $row['Name'];
                  $product_image = $row['image'];
                  $product_price = $row['Price'];
                  
                  
            $sql = "INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES (NULL, 'shirt', '$product_id', '$user_id', '$product_name', 'Shirts/$product_image', '1', '$product_price', '$product_price');";
              
				if(mysqli_query($conn, $sql)){
                    echo "
					
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is added into your cart !</b>
				</div>
					
					";
                }
		
		
      }
		
	}
	













if(isset($_POST["addProductkurta"])){
    $pid = $_POST["proId"];
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE product_id = '$pid' AND user_id = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
		}
      else{
			$sql = "SELECT * FROM xasion_categorie_shirts WHERE id = '$pid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
                  $product_id = $row['id'];
                  $product_name = $row['Name'];
                  $product_image = $row['image'];
                  $product_price = $row['Price'];
                  
                  
            $sql = "INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES (NULL, 'shirt', '$product_id', '$user_id', '$product_name', 'Shirts/$product_image', '1', '$product_price', '$product_price');";
              
				if(mysqli_query($conn, $sql)){
                    echo "Product is added";
                }
		
		
      }
		
	}






if(isset($_POST["addProductkurta"])){
    $pid = $_POST["proId"];
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE product_id = '$pid' AND user_id = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
		}
      else{
			$sql = "SELECT * FROM xasion_categorie_shirts WHERE id = '$pid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
                  $product_id = $row['id'];
                  $product_name = $row['Name'];
                  $product_image = $row['image'];
                  $product_price = $row['Price'];
                  
                  
            $sql = "INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES (NULL, 'shirt', '$product_id', '$user_id', '$product_name', 'Shirts/$product_image', '1', '$product_price', '$product_price');";
              
				if(mysqli_query($conn, $sql)){
                    echo "Product is added";
                }
		
		
      }
		
	}






if(isset($_POST["addProductCartjeans"])){
    $pid = $_POST["proIdjeans"];
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE product_id = '$pid' AND user_id = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
		}
      else{
			$sql = "SELECT * FROM xasion_categorie_jeans WHERE id = '$pid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
                  $product_id = $row['id'];
                  $product_name = $row['name'];
                  $product_image = $row['image'];
                  $product_price = $row['Price'];
          
                      
                  
            $sql = "INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES (NULL, 'Jeans', '$product_id', '$user_id', '$product_name', 'jeans/$product_image', '1', '$product_price', '$product_price');";
              
				if(mysqli_query($conn, $sql)){
                    echo "Product is added";
                }
		
		
      }
		
	}









if(isset($_POST["addProductCartWatch"])){
    $pid = $_POST["proIdWatch"];
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE product_id = '$pid' AND user_id = '$user_id'";
    $run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";
		}
      else{
			$sql = "SELECT * FROM xasion_categorie_watch WHERE id = '$pid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
                  $product_id = $row['id'];
                  $product_name = $row['name'];
                  $product_image = $row['image'];
                  $product_price = $row['Price'];
          
                      
                  
            $sql = "INSERT INTO `cart` (`id`, `categorie`, `product_id`, `user_id`, `product_title`, `product_image`, `Qty`, `price`, `total_amount`) VALUES (NULL, 'watch', '$product_id', '$user_id', '$product_name', 'Watches/$product_image', '1', '$product_price', '$product_price');";
              
				if(mysqli_query($conn, $sql)){
                    echo "Product is added";
                }
		
		
      }
		
	}


if(isset($_POST["get_cart_product"])){
//	if(isset($_SESSION["uid"]){
    $user_id = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE user_id='$user_id'";
    $run_query = mysqli_query($conn ,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){
        $no = 1;
		$total_amount = 1;
        while($row=mysqli_fetch_array($run_query)){
            $id = $row['id'];
            $product_cat = $row['categorie'];
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_image = $row['product_image'];
            $price = $row['price'];
            $qty = $row['Qty'];
            $total_amt = $row['total_amount'];
			
			$price_array = array($total_amt);
			$total_num = array_sum($price_array);
			$total_amount = $total_amount + $total_num;
			
            echo "
                 <div class='row'>
                     <div class='col-sm-1'>
                    
                         
                         <div class='number'>
                             <p>$no</p>
                         </div>
                     </div>
                     <div class='col-sm-2'>
                      
                         
                           <div class='content-image'>
                              <img src='Contents_Assets/images/$product_image' width='100%' height='100%'>
                            </div>
                        
                     
                     </div>
                     <div class='col-sm-2'>
                         
                          <div class='qty-products'>
                            <input type='number' pid='$product_id' class='input-type-qty qty' id='qty-$product_id' value='$qty'>
                       </div>
                     </div>
                     <div class='col-sm-2'>
                        
                         <div class='cat-product'>
                             <p>$product_cat</p>
                         </div>
                     </div>
                     <div class='col-sm-2'>
                         
                         <div class='pro-name'>
                             <p>$product_title</p>
                         </div>
                     </div>
                     <div class='col-sm-2'>
                        
                         
                         
                         <input type='price' pid='$product_id'  totalamounts='$total_amount' class='pro-price input-type-qty qty' id='price-$product_id' value='$price' disabled>
                         
                         <div class='ttl-price total'>
                            <p>Total Price</p>
                            
                            <input type='price' pid='$product_id' class='input-type-qty qty' id='total-$product_id' value='$total_amt' disabled>
                         </div>
                     </div>
                     <div class='col-sm-1'>
                     
                        <div class='btn-cntrl'>
                        <div class='btn-group'>

                          
                          <div remove_id=".$product_id." class='btn_delete_cart btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
                          
                             
                             </div>
                         </div>
                     </div>
                 </div>
            ";
            $no = $no + 1;
            
        }
    }
	   
    else{
        echo "
            <div class='no-products-in-cart'>
                      <p>You have no items in your shopping cart.
                          Click <a href='../index.php'>here</a> to continue shopping.</p>
                  </div>
        ";
  }

}




if(isset($_POST['RemoveFromCart'])){
	$Pro_id = $_POST['Removeid'];
	$uid = $_SESSION['uid'];
	$sql_cart = "DELETE FROM cart WHERE user_id = '$uid' AND product_id ='$Pro_id'";
	$run_query = mysqli_query($conn,$sql_cart);
	if($run_query){
		echo "
		<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Removed</b>
				</div>
		
		";
	}
}

if(isset($_POST['UpdateProduct'])){
	$Updateid = $_POST['Updateid'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$total = $_POST['total'];
	$uid = $_SESSION['uid'];
	
	
	
	$sql_update_cart = "UPDATE cart SET Qty='$qty', price='$price', 
	total_amount='$total' WHERE user_id='$uid' AND product_id='$Updateid'";
	$run = mysqli_query($conn,$sql_update_cart);
	if($run){
		echo "
		<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Updated</b>
				</div>
		
		";
	}
	
}

if(isset($_POST["cart_count"]) AND isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$run_query = mysqli_query($conn,$sql);
	echo mysqli_num_rows($run_query);
}



?>