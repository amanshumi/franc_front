
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<script src="scripts/jquery-3.4.1.js"></script>
</head>
<body>	
	<div id="all">
	<script src="scripts/jquery-3.4.1.js"></script>
		<div id="app" class="head">
			<div class="nav">
				<div id="brand">
					<p>Frank</p>
				</div>
				<div id="navbar">
					<a href="home.php">home</a>
					<a href="cart.php">cart</a>
					<a href="#" class="active">profile</a>
					<a href="#">about</a>
					<form action="login.php" method="POST">
						<button style="font-family: material;" class="logout" type="submit" name="logout">exit_to_app</button>
					</form>
				</div>
				<div id="collapse">
					<span id="shit" style="font-family: 'material'; font-size: 30px; border: 1px solid #fff; border-radius: 3px;">menu</span>
				</div>
			</div>

			<div class="mobile-nav">
				<div id="navbar">
					<a href="home.php">home</a>
					<a href="cart.php">cart</a>
					<a href="#" class="activee">profile</a>
					<a href="#">about</a>
					<form action="login.php" method="POST">
						<button class="llogout" type="submit" name="logout">logout</button>
					</form>
				</div>
			</div>

			<script>
				let switch_to = true;

				$("#collapse").hover(function() {
					$(this).css({opacity: "0.7", transition: "0.2s"});
				}, function() {
					$(this).css({opacity: "1", transition: "0.2s"});
				})

				$("#collapse").click(function() {
					this.switch_to = !this.switch_to;

					if(this.switch_to){
						$("#shit").text("clear");
					} else {
						$("#shit").text("menu");
					}

					$(".mobile-nav").slideToggle("slow");
				})
			</script>
		</div>

	
		<div class="body" id="pro-body" style="margin-top: 100px;">
			<div id="prefs">
					<script>
						function hide_feeder() {
							$("#status-feedback").fadeOut("slow");
						}
					</script>
				<div id="pref-body">
				
					<div class="user-identify">
						<div class="user-ico">
							<p style="font-family: material;">account_circle</p>
						</div>
						<div class="desc-desc">
							<p style="font-size: 30px;">Amanuel Sm</p>
							<span style="font-family: poppins; font-size: 12px; opacity: 0.7; border-radius: 4px; border: 2px solid #898989; padding: 10px;">amanuelshumi14@gmail.com</span>
						</div>
					</div>
					<div id="for-user" class="well-done">
						<span style="font-family: 'material'; font-size: 45px;">lock</span>
						<div>
							<p>change credentials</p>
							<span>edit your account information</span>
						</div>
					</div>
					<div id="for-history" class="well-done">
						<span style="font-family: 'material'; font-size: 45px;">shopping_cart</span>
						<div>
							<p>order history</p>
							<span>check products you have ordered</span>
						</div>
					</div>
					<div id="for-help" class="well-done">
						<span style="font-family: 'material'; font-size: 45px;">help</span>
						<div>
							<p>help center</p>
							<span>findout how to use this platform</span>
						</div>
					</div>
					<div id="for-feed" class="well-done">
						<span style="font-family: 'material'; font-size: 45px;">feedback</span>
						<div>
							<p>give feedback</p>
							<span>submit issues or any kind of feedback</span>
						</div>
					</div>
					<div id="for-terms" class="well-done">
						<span style="font-family: 'material'; font-size: 45px;">assignment</span>
						<div>
							<p>terms and conditions</p>
							<span>read our terms and conditions.</span>
						</div>
					</div>
				</div>
			</div>

			<div id="real-form" style="display: none;">
				<div id="sm-s" style="display: flex; justify-content: space-between;">
					<span onclick="$('#real-form').hide(); $('#prefs').fadeIn();" style="font-family: 'material'; cursor: pointer; font-size: 45px">arrow_back</span>
					<p style="padding: 10px;">Edit Account Info</p>
				</div>
				<form id="edit_user_form">
					<div class="form-input">
						<p>first name</p>
						<div>
							<input type="text" name="first_name" id="first_name" placeholder="first name..." required>
							<span style="font-family: 'material';">person</span>
						</div>
						<p>last name</p>
						<div>
							<input type="text" name="last_name" id="last_name" placeholder="last name..." required>
							<span style="font-family: 'material';">person</span>
						</div>
						<p>email</p>
						<div>
							<input type="text" name="user_email" id="user_email" placeholder="email..." required>
							<span style="font-family: 'material';">email</span>
						</div>
					</div>
					<div class="error-red" style="font-size: 13px;">
						<p id="small-error-para"></p>
					</div>
					<div id="form-pay-btn">
						<button id="edit_user_btn" onmouseover="this.style.opacity= '0.7'; this.style.transition='0.2s';" onmouseout="this.style.opacity= '1'; this.style.transition='0.2s';" type="submit" name="pay_for_product">Save</button>
						<p id="damn-close-nigga" style="cursor: pointer;" onclick="$('#real-form').hide(); $('#prefs').fadeIn();" id="hide-biz" onmouseover="this.style.opacity= '0.7'; this.style.transition='0.2s';" onmouseout="this.style.opacity= '1'; this.style.transition='0.2s';">Discard</p>
					</div>
				</form>
			</div>

			<!-- <script>
				$(function() {
					$("#edit_user_form").submit(function(e) {
						e.preventDefault();

						let first_name = $("#first_name").val();
						let last_name = $("#last_name").val();
						let user_email = $("#user_email").val();

						$.post("php/api/edit_account.php", {first_name: first_name, last_name: last_name, user_email: user_email}, 
							function(data, status) {
								$("#small-error-para").text(data);
								if(data == "success.") {
									$("#small-error-para").text("you have successfully edited your credentials.");
									$("#small-error-para").removeClass().addClass("status-success-edit");
									$("#small-error-para").css({"border": "1px solid #ccc", "padding": "10px", "border-radius": "6px", "text-align": "center"});
									$(".form-input").slideUp("slow");
									$("#form-pay-btn").slideUp("slow");
								} else {
									$("#small-error-para").removeClass().addClass("status-error-edit");
								}
						});	
					})
				})
			</script> -->

			<div id="pro-history">
				<div id="sm-s" style="display: flex; justify-content: space-between;">
					<span onclick="$('#pro-history').hide(); $('#prefs').fadeIn();" style="font-family: 'material'; cursor: pointer; font-size: 40px">arrow_back</span>
					<p style="padding: 10px;">Order History</p>
				</div>

				<div id="hist">
					<div id="small-det">
						<img src="images/3samsung.jpeg" alt="">
						<div>
							<p class="bigger-title-pro">iPhone 12 Pro Max</p>
							<p>price: 1200 USD</p>
							<p>units: 2 pcs</p>
						</div>
					</div>
					<span>jan 12, 2023</span>
				</div>

				<div id="hist">
					<div id="small-det">
						<img src="images/3samsung.jpeg" alt="">
						<div>
							<p class="bigger-title-pro">iPhone 12 Pro Max</p>
							<p>price: 1200 USD</p>
							<p>units: 2 pcs</p>
						</div>
					</div>
					<span>jan 12, 2023</span>
				</div>
				<div id="hist">
					<div id="small-det">
						<img src="images/3samsung.jpeg" alt="">
						<div>
							<p class="bigger-title-pro">iPhone 12 Pro Max</p>
							<p>price: 1200 USD</p>
							<p>units: 2 pcs</p>
						</div>
					</div>
					<span>jan 12, 2023</span>
				</div>
				<div id="hist">
					<div id="small-det">
						<img src="images/3samsung.jpeg" alt="">
						<div>
							<p class="bigger-title-pro">iPhone 12 Pro Max</p>
							<p>price: 1200 USD</p>
							<p>units: 2 pcs</p>
						</div>
					</div>
					<span>jan 12, 2023</span>
				</div>
				<div id="hist">
					<div id="small-det">
						<img src="images/3samsung.jpeg" alt="">
						<div>
							<p class="bigger-title-pro">iPhone 12 Pro Max</p>
							<p>price: 1200 USD</p>
							<p>units: 2 pcs</p>
						</div>
					</div>
					<span>jan 12, 2023</span>
				</div>
			</div>

			<div class="about-franc-help" style="font-family: poppins; display: none;">
				<div id="sm-s" style="display: flex; justify-content: space-between;">
					<span onclick="$('.about-franc-help').hide(); $('#prefs').fadeIn();" style="font-family: 'material'; cursor: pointer; font-size: 45px">arrow_back</span>
					<p style="padding: 10px;">steps on using frank</p>
				</div>
				<div class="about-desc" style="text-align: justify; line-height: 2.0em; font-size: 15px;">
					<p><span>account_circle</span>1. create an account and confirm it by proceeding into your email and clicking on the link we have provided you.</p>
					<p><span>shopping_cart</span>2. browse products either by their categories or by popularity and check them out. next, add the ones you are looking for in your shopping cart.</p>
					<p><span>monetization_on</span>3. purchase the products, go to your cart and proceed by clicking on the purchase button and entering the payment information required.</p>
					<p><span>mail</span>4. check your email for the order code that we have sent you when you ordered a product. you will show the order code to the delivery guy when you receive your product.</p>
					<p><span>settings</span>5. checkout preferences for changing account settings, checking out latest activities, give feedback etc.</p>
				</div>
			</div>

			<div class="franc-feedback" style="display: none;">
				<div id="sm-s" style="display: flex; justify-content: space-between;">
					<span onclick="$('.franc-feedback').hide(); $('#prefs').fadeIn();" style="font-family: 'material'; cursor: pointer; font-size: 45px">arrow_back</span>
					<p style="padding: 10px;">give us a feedback</p>
				</div>
				<div class="question-form" style="border: none;">
					<p style="font-size: 13px; line-height: 1.9em; text-align: justify; padding: 10px 0px 0px 0px; border-top: 2px solid #ccc;">Your feedbacks and comments will help us improve our work and helps us give more effort to add more features in the future. Thanks in advance.</p>
					<form action="#" method="POST">
						<textarea rows="4" name="feedback_body" required></textarea>
						<button type="submit" name="submit_feedback">submit</button>
					</form>
				</div>
			</div>
		</div>

		<?php
			include 'includes/footer.php';
		?>
		<script>
			$(function() {
				$(".well-done").hover(function() {
					$(this).css({background: "#f4f4f4", transition: "0.3s"});
				}, function() {
					$(this).css({background: "#fff", transition: "0.3s"});
				})

				let for_user = $("#for-user");
				let for_hist = $("#for-history");
				let for_help = $("#for-help");
				let for_feed = $("#for-feed");

				$("#for-user").click(function() {
					$("#real-form").fadeIn();
					$("#prefs").hide();
				})

				$("#for-history").click(function() {
					$("#pro-history").fadeIn();
					$("#prefs").hide();
				})

				$("#for-help").click(function() {
					$(".about-franc-help").fadeIn();
					$("#prefs").hide();
				})

				$("#for-feed").click(function() {
					$(".franc-feedback").fadeIn();
					$("#prefs").hide();
				})				
			})
		</script>
	</div>

	<script>
		let show = false;
		
		function toggleShow() {
			this.show = !this.show;
			console.log(this.show);

			if(this.show) {
				document.getElementById('list').style.display = 'flex';
				document.getElementById('least').innerHTML= 'expand_less';
			} else {
				document.getElementById('list').style.display = 'none';
				document.getElementById('least').innerHTML= 'expand_more';
			}
		}	

		function show_modal() {
			let doc = document.getElementById('modal');
			doc.style.display = 'flex';
		}		

		function hide_modal() {
			document.getElementById('modal').style.display = 'none';
		}	
	</script>
	<script src="js/script.js"></script>

</body>
</html>