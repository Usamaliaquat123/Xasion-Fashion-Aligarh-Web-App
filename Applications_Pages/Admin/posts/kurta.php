<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello css</title>
	<link rel="stylesheet" href="Assets/css/style.css">
	<link rel="stylesheet" href="Assets/css/menu.css">
	<link rel="stylesheet" href="Assets/css/Content.css">
	<link rel="stylesheet" href="Assets/css/Content-style.css">
	<link rel="stylesheet" href="Assets/css/kurta.css">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.min.css">

	<!--Bootstrap min.js-->
	<script src="../Assets/bootstrap/jQuery/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="../Assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="../Assets/jQuery/Chart.js"></script>
	<script src="../Assets/charts/script.js">


	</script>

</head>

<body>


	<!--          <hr class="line" >-->
	<div class="background">
		<div class="fade-in-animations">
			<div class="fade-in-animations">
				<div class="Content-session">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-12">
								<div class="background-image-cover"></div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<div class="Heading-shirt">
									<p>Our Shirts Rack</p>
								</div>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<div class="row">
							<div class="col-sm-2">

							</div>
							<div class="col-sm-8">
								<div class="heading-of-add-product">
									<p>Add new Item</p>
								</div>
								<div class="product-items">
									<form action="" method="post">
										<div class="product-name">
											Product Name
											<input type="text" placeholder="Product Name" name="pro_name" id="pro-name" required>
										</div>
										<br>
										<br>
										<div class="product-price">
											Product Price $
											<input type="number" placeholder="Product Price" name="pro_price" id="pro-pri" required>
										</div>
										<br>
										<br>
										<div class="product-categorie">
											Product Categorie
											<input type="shirts" value="Shirts" disabled>
										</div>
										<br>

										<div class="product-image">
											Product images
											<div class="container-fluid">
												<div class="row">
													<div class="col-sm-4">
														<div class="image-box" onclick="">
															<div class="sign">
																+
															</div>
														</div>
													</div>


													
												</div>
											</div>
										</div>

										<div class="product-Description">
											Product Description
											<div class="container-fluid">
												<div class="row">
													<div class="col-sm-12">
														<textarea rows="8" placeholder="Description"></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="last-add-item">
											<div class="container-fluid">
												<div class="row">
													<div class="col-sm-9">
														<div class="Note-add-item">
															<p>Make sure you fill all credientials</p>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="btn-new-items-add">
															<input type="button" id="submit" class="btn btn-primary" value="Add new item">
														</div>
														<br>

													</div>
													<div class="hello">
														<span id="error_message" class="text-danger"></span>
														<span id="sucsess_message" class="text-success"></span></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<div class="Heading-products-main">
									<p>Your Items</p>
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
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="Assets/images/logos/Admin-logo.png" width="30" height="30"><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/Applications_Pages/logout.php">Logout</a></li>

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
				<img src="Assets/images/logos/Menu/User.png" width="23px" height="23px">

			</div>
		</div>

		<div id="menu">
			<a href="../Admin-pannel.php">
				<div class="background-chart-logo">
					<div class="chart-logo">
						<img src="Assets/images/logos/Menu/Chart.png" width="20px" height="20px">
					</div>
					<div class="para-chart-logo">
						<p>Analytics</p>
					</div>
				</div>
			</a>
			<a href="../User_Security/User_Security.php">
				<div class="background-locker-logo">
					<div class="locker-logo">
						<img src="Assets/images/logos/Menu/locker.png" width="20px" height="20px">
					</div>
					<div class="para-locker-logo">
						<p>Users Security</p>
					</div>
				</div>
			</a>
			<a href="../Users/Users.php">
				<div class="background-users-logo">
					<div class="users-logo">
						<img src="Assets/images/logos/Menu/User.png" width="20px" height="20px">
					</div>
					<div class="para-users-logo">
						<p>Users</p>
					</div>
				</div>
			</a>
			<a href="../Subscribers/Subscribers.php">
				<div class="background-images-logo">
					<div class="images-logo">
						<img src="Assets/images/logos/Content/subscribers.png" width="20px" height="20px">
					</div>
					<div class="para-images-logo">
						<p>Subscribers</p>
					</div>
				</div>
			</a>
			<a href="../Database_tables/index.php">
				<div class="background-database-logo">
					<div class="database-logo">
						<img src="Assets/images/logos/Menu/database.png" width="20px" height="20px">
					</div>
					<div class="para-database-logo">
						<p>Database tables</p>
					</div>
				</div>
			</a>
			<a href="../posts/posts.php">
				<div class="background-pages-logo">
					<div class="pages-logo">
						<img src="Assets/images/logos/Content/posts.png" width="20px" height="20px">
					</div>
					<div class="para-pages-logo">
						<p>Posts</p>
					</div>
				</div>
			</a>
			<a href="../Contents_folders/Content_folders.php">
				<div class="background-folder-logo">
					<div class="folder-logo">
						<img src="Assets/images/logos/Menu/Clients-folder.png" width="20px" height="20px">
					</div>
					<div class="para-folder-logo">
						<p>Content folders</p>
					</div>
				</div>
			</a>
			<a href="../trash/trash.php">
				<div class="background-trash-logo">
					<div class="trash-logo">
						<img src="Assets/images/logos/Menu/trash.png" width="20px" height="20px">
					</div>
					<div class="para-trash-logo">
						<p>Trash</p>
					</div>
				</div>
			</a>
			<a href="../Settings/Settings.php">
				<div class="background-settings-logo">
					<div class="settings-logo">
						<img src="Assets/images/logos/Menu/User_setting.png" width="20px" height="20px">
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
<script>
	$(document).ready(function() {

		products();

		function products() {
			$.ajax({
				url: "Assets/action.php",
				method: "POST",
				data: {
					getproductkurta: 1
				},
				success: function(data) {
					$("#get_product").html(data);
				}
			})
		}


		
			$("body").delegate(".deletekurta","click",function(event){
        event.preventDefault();
        
        var idme = $(this).data("id2");
			
			
        $.ajax
        ({
            url: "Assets/action.php",
            method:"POST",
            data : {deleteproductkurta:1, pid: idme},
            success : function(data){
               $('#cart_msg').html(data);
				products();
            }
        });
    });



	




	});

</script>
