
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Frank Store</title>
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
					<a href="cart.php">cart</a>
					<a href="profile.php">profile</a>
					<a href="#">about</a>
					<form action="php/login" method="POST">
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
					<form action="php/login" method="POST">
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
			<div class="show">
				<form action="#" method="GET" id="hate_mod">
					<input type="text" name="name" placeholder="search here..." required>
					<button id="searcher" style="font-family: 'material'; font-size: 22px;">search</button>
				</form>
				<p id="bigger">Search and Buy Anything Easily.</p>
				<div id="choose">
					<div id="cate" onclick="toggleShow()">
						<p id="cat">choose subcategory</p>
						<span id="least" style="font-family: 'material'; color: #000;">expand_more</span>
					</div>
					<div onclick="this.style.display = 'none';" id="list">
						<a href="#">category one</a>
						<a href="#">category one</a>
						<a href="#">category one</a>
						<a href="#">category one</a>
						<a href="#">category one</a>
						<a href="#">category one</a>
					</div>
				</div>
			</div>
		</div>

		<div class="body">
			<div class="title" style="text-align: left;
			font-family: Poppins;">
				<p style='margin-left: 1.4%;'>home>electronics>laptops</p>
			</div>

			<div id="pro-all">
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>	
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>
				<a style='text-decoration: none; color: #191919;' href='#' id='product'>";
					<div class='pro-img'>
						<img src='images/3samsung.jpeg'>
					</div>";
					<div id='spec'>
						<div>
							<p>iPhone 12 Pro Max</p>
							<p>40000 ETB</p>
						</div>
						<div><p style='padding: 10px 20px 10px 20px;
							border-top-left-radius: 50px;
							border-bottom-left-radius: 50px;
							background: #B824C2 !important;
							color: #fff;
							border: none;
							font-family: poppins;
							font-size: 13px;
							transition: opacity 0.3s;' id='getprov'>view</p>
						</div>
					</div>
				</a>	
				
			</div>
		</div>

		<div id="pagin">
			<div id="pages">
				<a href="#" class="opt">prev</a>
				<a href="#" class="curr-page">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#" class="opt">next</a>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>		

		<script>
			$(document).ready(function() {
				$("input").hover(function() {
					$("input").css({opacity: "0.8", transition: "0.2s"});
				}, function() {
					$("input").css({opacity: "1", transition: "0.2s"});
				})

				$("#searcher").hover(function() {
					$("#searcher").css({opacity: "0.8", transition: "0.2s"});
				}, function() {
					$("#searcher").css({opacity: "1", transition: "0.2s"});
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
				$("#list").slideDown("fast");
				$("#least").text("expand_less");
				$("#bigger").slideUp(100);
				$("#hate_mod").slideUp(100);
			} else {
				$("#list").slideUp("fast");
				$("#least").text("expand_more");
				$("#bigger").slideDown(100);
				$("#hate_mod").slideDown(100);
			}
		}
	</script>
	<script src="js/script.js"></script>

</body>
</html>