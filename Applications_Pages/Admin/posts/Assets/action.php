

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
                       <img src='Assets/images/Shirts/$product_image' width='100%'>
                        <div class='para-DandG'>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                       <div class='btn-group btn-group-justified'>
							
								<div data-id1=".$product_id." class='delete  btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
    
						  </div>

                    </div>
                 </div>
				 
				 ";
        }
    }
}


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
                       <img src='Assets/images/Watches/$product_image' width='100%'>
                       
                        <div class='para-DandG'>
                       <br>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                        <div class='btn-group btn-group-justified'>
								
								<div data-id3=".$product_id." class='deletewatch btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
    
						  </div>
                    </div>
                 </div>";
        }
    }
}
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
               <br>
               <br>
                       <img src='/WebSiteSource/Contents/Contents_Assets/images/jeans/$product_image' width='100%'>
                       
                        <div class='para-DandG'>
                       <br>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                        <div class='btn-group btn-group-justified'>
								
								<div data-id4=".$product_id." class='deletejeans btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
    
						  </div>
                    </div>
                 </div>";
        }
    }
}



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
               <br>
               <br>
                       <img src='/WebSiteSource/Contents/Contents_Assets/images/kurta/$product_image' width='100%'>
                       
                        <div class='para-DandG'>
                       <br>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                        <div class='btn-group btn-group-justified'>
								
								<div data-id2=".$product_id." class='deletekurta btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
    
						  </div>
                    </div>
                 </div>";
        }
    }
}





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
               <br>
               <br>
                       <img src='/WebSiteSource/Contents/Contents_Assets/images/bodyspray/$product_image' width='100%'>
                       
                        <div class='para-DandG'>
                       <br>
                        <p>$product_Name</p>
                        <p>PKR $product_price/-</p>
                        <div class='btn-group btn-group-justified'>
								
								<div data-id5=".$product_id." class='deletebodyspray btn btn-danger'><span class='glyphicon glyphicon-trash'></span></div>
    
						  </div>
                    </div>
                 </div>";
        }
    }
}



if(isset($_POST['deleteproductbodyspray'])){
	$Pro_id = $_POST['pid'];
	
	$sql_cart = "DELETE FROM xasion_categorie_bodyspray WHERE id = '$Pro_id'";
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




if(isset($_POST['deleteproduct'])){
	$Pro_id = $_POST['pid'];
	
	$sql_cart = "DELETE FROM xasion_categorie_shirts WHERE id = '$Pro_id'";
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


if(isset($_POST['deleteproductkurta'])){
	$Pro_id = $_POST['pid'];
	
	$sql_cart = "DELETE FROM xasion_categorie_kurta WHERE id = '$Pro_id'";
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


if(isset($_POST['deleteproductwatch'])){
	$Pro_id = $_POST['pid'];
	
	$sql_cart = "DELETE FROM xasion_categorie_watch WHERE id = '$Pro_id'";
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



//if(isset($_POST["product_name"])){
//	$pro_name  =  $_POST['product_name'];
//	$pro_price = $_POST['product_price'];
//	
////	$sql = 'INSERT INTO `xasion_categorie_shirts` (`id`, `Name`, `Price`, `image`) VALUES (NULL, '$pro_name', '$pro_price', '25.jpg')';
////	
////	 $run_query = mysqli_query($conn,$product_query);
////	
//	
//}


 $output = '';  
 if(isset($_FILES['file']['name'][0]))  
 {  
      //echo 'OK';  
      foreach($_FILES['file']['name'] as $keys => $values)  
      {  
           if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'upload/' . $values))  
           {  
                $output .= '<img src="upload/'.$values.'" width="160px" height="100px"/>';  
           }  
      }  
 }  
 echo $output;  
 ?> 



?>
