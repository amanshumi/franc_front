
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Frank Home</title>
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
					<a href="#" class="active">home</a>
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
					<a href="#" class="active">home</a>
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

			<div class="show">
				<form action="search.php" method="GET" id="hate_mod">
					<input type="text" name="name" placeholder="search here..." required>
					<button id="searcher" style="font-family: 'material'; font-size: 22px;">search</button>
				</form>
				<p id="bigger">Search and Buy Anything Easily.</p>
			</div>
		</div>

		<script>

		</script>

		<div class="body" style="">
			<div class="cate-new">
				<div class="title" style="text-align: left; font-family: Poppins; border-bottom: 1px solid #f4f4f4;">
					<p>choose a category</p>
				</div>
				<div class="cate-new-list">
					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>

					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>

					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>

					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>

					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>

					<a href='#' class='cate-new-single'>
						<img class='small-shit' src='icons/multimedia.png' alt='category img'>
						<p>multimedia</p>
					</a>
				</div>
			</div>
			<div class="featured">
				<div class="title" style="text-align: left; font-family: Poppins;">
					<p>trending products</p>
				</div>

				<div id="pro-all">
					
							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/2samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/3samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>

							<a href='product.php' style='text-decoration: none; color: #191919;' id='product'>
								<div class='pro-img'>
											<img src='images/2samsung.jpeg'>
									</div>
								<div id='spec'>
										<div><p>iPhone 12 Pro Max</p><p>24000 ETB</p>
								</div><div><p 
								style='padding: 10px 20px 10px 20px;
								border-top-left-radius: 50px;
								border-bottom-left-radius: 50px;
								background: #B824C2 !important;
								color: #fff;
								border: none;
								font-family: poppins;
								font-size: 13px;
								transition: opacity 0.3s;' id='getprov'>view</p></div>
								</div>
							</a>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				$("input").hover(function() {
					$("input").css({
						opacity: "0.8",
						transition: "0.2s"
					});
				}, function() {
					$("input").css({
						opacity: "1",
						transition: "0.2s"
					});
				})

				$("#searcher").hover(function() {
					$("#searcher").css({
						opacity: "0.8",
						transition: "0.2s"
					});
				}, function() {
					$("#searcher").css({
						opacity: "1",
						transition: "0.2s"
					});
				})
			})
		</script>

		<script>
			$(function() {
				$(".cate-new-single").hover(function() {
					$(this).css({
						"opacity": "0.7",
						"transition": "0.2s"
					});
				}, function() {
					$(this).css({
						"opacity": "1",
						"transition": "0.2s"
					});
				});
			});
		</script>



		<!-- <div id="modal">
			<div id="single-item">
				<div id="modal-img">
					<img src="images/nike.jpg" height="400" width="460">
				</div>
				<div id="item-spec">
					<div id="top-modal">
						<p>Apple iPhone X Pro</p>
						<span id="exit"></span>
					</div>
					<div id="grid">
						<p>Specification: </p>
						<p>128GB ROM, 8GB RAM, 25MP front and back cam, black color</p>
					</div>
					<div id="grid">
						<p>Price: </p>
						<p>28000ETB</p>
					</div>
					<div id="grid">
						<p>Source: </p>
						<p>Don Electronics</p>
					</div>
					<div id="grid">
						<p>enter quantity</p>
						<input type="number" style="font-family: poppins; text-align: center; outline: none;
						  border: none; border-radius:5px; background: #ccc;">
					</div>
					<div id="buy">
						<p style="margin-top: 10px;" onclick="hide_modal()">Add To Cart</p>
					</div>
				</div>
			</div>
		</div> -->

		<?php include 'includes/footer.php'; ?>

	</div>

	<script>
		let show = false;

		function toggleShow() {
			this.show = !this.show;
			console.log(this.show);

			if (this.show) {
				document.getElementById('list').style.display = 'block';
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