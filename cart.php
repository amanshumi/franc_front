
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<script src="scripts/jquery-3.4.1.js"></script>
</head>
<body>	
	<div id="all">
		<div id="app" class="head">
			<div class="nav">
				<div id="brand">
					<p>Frank</p>
				</div>
				<div id="navbar">
					<a href="home.php">home</a>
					<a href="#" class="active">cart</a>
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
					<a href="#" class="activee">cart</a>
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
	
		<div class="body" style="margin-top: 100px;">
			<div id="uselessd" class="title" style="font-family: Poppins;">
				<span style="font-family: material; padding-right: 10px; font-size: 45px;">shopping_cart</span>
				<p style="padding: 20px; font-size: 25px;">shopping cart</p>
			</div>

			<div id="pro-all" class="pro-all-cart" style="width: 70%;">
							<div id='cart-product'>
									<img src='images/2samsung.jpeg'>
							 	<div id='spec'>
								    	<div><h3>Lenovo Legion</h3><p>quantity: 3 pcs</p><p>price: 23980 ETB</p>
							 </div>
									<div>
									<a id='mad' style='font-family: material; font-size: 20px;' href='#'>delete</a>
								  </div>
							</div>
							</div>

							<div id='cart-product'>
									<img src='images/2samsung.jpeg'>
							 	<div id='spec'>
								    	<div><h3>Lenovo Legion</h3><p>quantity: 3 pcs</p><p>price: 23980 ETB</p>
							 </div>
									<div>
									<a id='mad' style='font-family: material; font-size: 20px;' href='#'>delete</a>
								  </div>
							</div>
							</div>
							<div id='cart-product'>
									<img src='images/2samsung.jpeg'>
							 	<div id='spec'>
								    	<div><h3>Lenovo Legion</h3><p>quantity: 3 pcs</p><p>price: 23980 ETB</p>
							 </div>
									<div>
									<a id='mad' style='font-family: material; font-size: 20px;' href='#'>delete</a>
								  </div>
							</div>
							</div>
							<div id='cart-product'>
									<img src='images/2samsung.jpeg'>
							 	<div id='spec'>
								    	<div><h3>Lenovo Legion</h3><p>quantity: 3 pcs</p><p>price: 23980 ETB</p>
							 </div>
									<div>
									<a id='mad' style='font-family: material; font-size: 20px;' href='#'>delete</a>
								  </div>
							</div>
							</div>

			</div>

				<div id='pay-form'><p>Total Price: 5000 ETB</p>
					<a href='#' id='button'>place order</a></div>
			

			<script>
				// $(function() {
				// 	$("#button").click(function() {
				// 		$("#uselessd").slideUp("fast");
				// 		$("#pro-all").slideUp("fast");
				// 		$("#pay-form").slideUp("fast");
				// 		$("#form-payment").slideDown("fast");
				// 	})

				// 	$("#exit-form").click(function() {
				// 		$("#uselessd").slideDown("fast");
				// 		$("#pro-all").slideDown("fast").css({"display": "grid"});
				// 		$("#pay-form").slideDown("fast").css({"display": "flex"});
				// 		$("#form-payment").slideUp("fast");
				// 	})
				// });	
			</script>
		</div>

		<?php include 'includes/footer.php'; ?>

		<script>
			$(function() {
				$("#pay-form-data").submit(function(e) {
					e.preventDefault();
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