<?php
						session_start();
						
?>


<!DOCTYPE html>
<html>

<head>
	<title>Payment Method</title>
	<link rel="stylesheet" href="../Assets/Design/CSS/payment_method.css">

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="../Assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Our button-animation.css for creating and animating buttons -->
	<link rel="stylesheet" href="../Assets/Design/CSS/animations.css">
	<!--Bootstrap min.js-->
	<script src="../Assets/bootstrap-3.3.7-dist/jQuery/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../Assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="fade-in-animations">
		<div class="background-image-payment-method">
			<div class="container-fluid">


				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div class="heading-payment">
							<p>Payment Methods . . !</p>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
					
					
						
<?php
	if(isset($_SESSION['firstname_session'])){
        echo "
			<div class='validation-of-users'>
				<p>Welcome ".$_SESSION['type']."</p>
			</div>
			
			
			<div class='welcome-users-grettings'>
						<p>Welcome ".$_SESSION['firstname_session']." ".$_SESSION['lastname_session']." you already log in</p>
			</div>
			
			<div class='welcome-user-grettings-para'>
						<p>Proceed to the next step..</p>
			</div>
			<input type='button' value='Continue and proceed to Next Step'>
		";
    }
						else
						{
							echo "
							<div class='signin-option'>
							<p>Sign in</p>
						</div>
						<div class='para-signin'>
							<p>Please enter your credentials.</p>
						</div>
						<div class='para2-signin'>
							<p>If you are already <a href='../Applications_Pages/Signup.php'>have an account.. ?</a></p>
						</div>
						<form action=' method='post'>
							<input type='email' name='email' placeholder='Email' required>
							<br>
							<br>
							<input type='password' name='password' placeholder='Password' required>
							<br>
							<br>
							<button type='submit'>Log in</button>
						</form>
							
							
							<!--If you don't have an account-->
						<div class=para-signup>
							<p>If you don't have an account don't worry..!</p>
						</div>
						<div class=signup-option>
							<p>Sign up</p>
						</div>
						<div class=para2-signup>
							<p>Please enter your credentials.</p>
						</div>
						<form action= method=post>
							<input type=text placeholder=First Name name=firstname>
							<br><br>
							<input type=text placeholder=Last Name name=lastname>
							<br><br>
							<input type=email placeholder=Your Email name=email>
							<br><br>
							<input type=password placeholder=Password name=email>
							<br><br>
							<input type=password placeholder=Re-type password name=email>
							<br><br>
							<input type=text placeholder=Shipping Address name=ShippingAddress>
							<br><br>
							<button type=submit>Sign up</button>
							<br><br>
							<div class=para2-signin>
								<p>If you are already <a href=../Applications_Pages/Signup.php>have an account.. ?</a></p>
							</div>
						</form>
							
							
							
							";
						}
						
						?>
					
					
					

						
						
						
						

						

					</div>

					<div class="col-sm-4">
						<div class="heading-shippingmethod">
							<p>Shipping Address</p>
						</div>
						<div class="line2-shipping-info-para1">
							<p>Please enter your Shipping Address..!</p>
						</div>
						<br>
						<div class="line2-form">
							<form action="" method="post">
								<input type="text" placeholder="Address" name="address1" id="addr1" required>
								<br>
								<br>
								<input type="text" placeholder="Address 2 (Optional)" name="address2" id="Addr2">
								<br>
								<br>

								<button type="submit">Proceed to Payment</button>
								<br>
								<br>
								<input type="button" value="Update">



							</form>
						</div>


					</div>
					
					

					<div class="col-sm-4">
						<div class="heading-line3-payment-option">
							<p>Payment Methods</p>
						</div>
						<div class="para-line3-payment-option">
							<p>Please select your payment method..!</p>
						</div>


						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<p class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">PayPal / Amex / Discovery</a>
									</p>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
									 	<div class="style-Paypal-Amex-Discovery">
									 		<p>Proceed to PayPal/ Amex / Descovery</p>
									 	</div>
									 	<input type="button" value="Proceed">
									</div>
								</div>
							</div>
							
							
							
							
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<p class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Cash on Delivery</a>
									
									</p>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">Check your shipping address. <p>
									And place your order Now..!</p></div>
										<input type="button" value="Place Your Order">
								</div>
							</div>
							
							
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<p class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Credit / Visa Card</a>
									</p>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="para-credit-visa-panel">
											<p>Make sure your shipping address is correct !</p>
										</div>
										<br>
										<br>
										<div class="country-info-credit-visa">
											<p>Pakistan</p>
										</div>
										<br>
										<div class="credientails-Visa-Pannel">
											<p>Please enter your credientals</p>
										</div>
										<div class="border-credit-card-img">
										   <br>
										   		<img src="../Assets/Design/images/payment/Cards/visa.png" width="30px" height="22px">
										  
										 
										   		<img src="../Assets/Design/images/payment/Cards/master-card.png" width="30px" height="22px">
										   
										   
										   		<img src="../Assets/Design/images/payment/Cards/ae.png" width="30px" height="22px">
										   
										  
										   		<img src="../Assets/Design/images/payment/Cards/jcb.png" width="30px" height="22px">
										  
										   
										   		<img src="../Assets/Design/images/payment/Cards/di.png" width="30px" height="22px">
										 
										   
										   		<img src="../Assets/Design/images/payment/Cards/dn.png" width="30px" height="22px">
										 
										</div>
										<div class="form-validation-credit-card">
										<br>
										<br>
											<form action="" method="post">
											<div class="Credit-card-number-lbl">
												<p>Credit Card Number</p>	
											</div>
												<input type="number" value="Value" placeholder="Credit Card Number" min="16" maxlength="16" required>
										
												<br>
												<br>
												 <div class="form-group" id="expiration-date">
												 
													<div class="expiration-label-cc">
														<p>Expiration Date:</p>
													</div>
													<select>
														<option value="01">January</option>
														<option value="02">February </option>
														<option value="03">March</option>
														<option value="04">April</option>
														<option value="05">May</option>
														<option value="06">June</option>
														<option value="07">July</option>
														<option value="08">August</option>
														<option value="09">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
													<select>
														<option value="16"> 2017</option>
														<option value="17"> 2018</option>
														<option value="18"> 2019</option>
														<option value="19"> 2020</option>
														<option value="20"> 2021</option>
														<option value="21"> 2022</option>
														<option value="21"> 2023</option>
														<option value="21"> 2024</option>
														<option value="21"> 2024</option>
													</select>
												</div>
												
											<div class="Credit-card-number-lbl">
												<p>Card Verification Number</p>	
											</div>
												<input type="number" value="Value" placeholder="Verify Card Number" title="Card Verification Number" min="1" max="999" required>
												<br>
												<br>
												<div class="form-group">
													<img src="../Assets/Design/images/payment/Cards/main-check.png" width="80" height="40">
															
												<input type="submit" value="Place Order">
											</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="total-money">
							<p>Grand Total PKR 3,490.00</p>
						</div>
						
						
					</div>
					
				</div>
			</div>

		</div>
		<div class="background-bottom-content-footer-logos">
			<div class="container-fluid">
				<div class="col-sm-6">
					<div class="social-contact">
						<p>Connect with Us!</p>
						<div class="social-contact-logos">

						</div>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>
		</div>
		<div class="background-bottom-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-3"></div>
					<div class="col-sm-3"></div>
					<div class="col-sm-3"></div>
				</div>
			</div>
		</div>
	</div>


</body>


</html>
<script>
$(document).ready(function(){
	 $("#AddrClick").click(function(event){
        event.preventDefault();
        $.ajax({
            url: "Contents_Assets/backend/action.php",
            method:"POST",
            data : {get_cart_product:1},
            success : function(data){
               $("#cart_data").html(data);
            }
        })
    })
});