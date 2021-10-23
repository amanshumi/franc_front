
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<script src="scripts/jquery-3.4.1.js"></script>
</head>

<body style="background: #f4f4f4;">
	<div id="all">
		<div id="app" class="head">
			<div class="nav">
				<div id="brand">
					<p>Frank</p>
				</div>
				<div id="navbar">
					<a href="home.php">home</a>
					<a href="cart.php">cart</a>
					<a href="profile.php">profile</a>
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
					<a href="profile.php">profile</a>
					<a href="#">about</a>
					<form action="login.php" method="POST">
						<button class="llogout" type="submit" name="logout">logout</button>
					</form>
				</div>
			</div>

			<script>
				let switch_to = true;

				$("#collapse").hover(function() {
					$(this).css({
						opacity: "0.7",
						transition: "0.2s"
					});
				}, function() {
					$(this).css({
						opacity: "1",
						transition: "0.2s"
					});
				})

				$("#collapse").click(function() {
					this.switch_to = !this.switch_to;

					if (this.switch_to) {
						$("#shit").text("clear");
					} else {
						$("#shit").text("menu");
					}

					$(".mobile-nav").slideToggle("slow");
				})
			</script>
		</div>

		<div class="body" style="margin-top: 110px;">
			<div id="form-payment" style="background: #fff;">
				<div id="pay-title" style="margin-bottom: 30px;">
					<p>Billing Details</p>
					<p id="exit-form"></p>
				</div>
				<div id="real-form">
					<div class="billing-details">
						<div><p>Shipping Price: </p> <span> 34000 ETB</span></div>
						<div><p>Total Price of Items:</p> <span>45900 ETB</span></div>
						<div><p>Overall Price:</p> <span>220009 ETB</span></div>
					</div>
				</div>
				<div id="pay-title" style="margin-top: 25px;">
					<p>Ordering Information</p>
					<p id="exit-form"></p>
				</div>
				<div id="real-form">
					<form id="pay-form-data" action="#" method="POST">
						<div class="form-input">
							<p>payment method</p>
							<div class="checkout_details_area mt-50 clearfix">
								<span style="font-family: 'material';">monetization_on</span>
								<select name="payment_method" class="nice-select">
									<option>YenePay</option>
									<option>CBE Birr</option>
									<option>Direct Bank Transfer</option>
								</select>
							</div>
							<p>street address</p>
							<div>
								<span style="font-family: 'material';">location_city</span>
								<input type="text" name="street_address" placeholder="e.g mexico, john building 4th floor..." required>
								<input type="hidden" name="latitude" id="latitude">
								<input type="hidden" name="longitude" id="longitude">
							</div>
							<!-- <input type="hidden" name="latitude" id="latitude" value="">
							<input type="hidden" name="longitude" id="longitude" value=""> -->
						</div>
						<div id="form-pay-btn">
							<p></p>
							<button type="submit" name="pay_for_product" onmouseover="this.style.opacity= '0.7'; this.style.transition='0.2s';" onmouseout="this.style.opacity= '1'; this.style.transition='0.2s';">place order</button>
						</div>
						<div class="hint-notice">
							<p class="notice-title">Notice: </p>
							<p style="font-size: 14px; text-align: justify-all; line-height: 1.7em;">Once you have completed your order we will provide you a transaction code through your email. Keep it secret and you will show it to the delivery guy before receiving the items you have purchased.</p>
							<p style="padding: 10px; text-align: center; font-size: 20px; margin-top: 33px; border-radius: 6px; border-bottom: 3px solid #ccc; border-top: 3px solid #ccc;">Thanks For Choosing Frank.</p>
						</div>
					</form>
				</div>
				<script>
					var latitude_input = $("#latitude");
					var longitude_input = $("#longitude");

					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(function(position) {
							latitude_input.val(position.coords.latitude);
							longitude_input.val(position.coords.longitude);
						}, function(error) {
							console.log(error);
						});
					} else {
						console.log('geolocation not supported');
					}
				</script>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>

	<script>
		let show = false;

		function toggleShow() {
			this.show = !this.show;
			console.log(this.show);

			if (this.show) {
				document.getElementById('list').style.display = 'flex';
				document.getElementById('least').innerHTML = 'expand_less';
			} else {
				document.getElementById('list').style.display = 'none';
				document.getElementById('least').innerHTML = 'expand_more';
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