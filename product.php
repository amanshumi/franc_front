<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Product Details</title>
	<link rel="stylesheet" href="rating/demo/styles.css">
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
						<button style="" class="llogout" type="submit" name="logout">logout</button>
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

		<div class="body">

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

				$("button").hover(function() {
					$("button").css({
						opacity: "0.8",
						transition: "0.2s"
					});
				}, function() {
					$("button").css({
						opacity: "1",
						transition: "0.2s"
					});
				})


				let show_more = $("#choose-pro");
				let exit_btn = $("#exit");
				show_more.click(function() {
					$("#modal").fadeIn().css({
						display: "flex"
					});
				});

				exit_btn.click(function() {
					$("#modal").fadeOut();
				})
			})
		</script>

		<div class="body" id="pro-sing-body" style="margin-top: 100px; padding: 0px;">

			<div class="single-product-new">
				<div class="error-red">
					
				</div>

				<script>
					function hide_feeder() {
						$("#status-feedback").fadeOut("slow");
					}
				</script>
				<div class="singler">
							<div class='bigger-img'><img src='images/3samsung.jpeg' height='390' width='430'><div class='more-pro-images'><img src='images/3samsung.jpeg'> <img src='images/3samsung.jpeg'> <img src='images/3samsung.jpeg'></div></div>
							<div id='item-spec'>
											<p class='grid' style='font-size: 40px; display: flex; justify-content: space-between; align-items: center;'>iPhone 12 Pro Max<span>label_outline</span></p>";
							<div id='grid'>
												<p>Product Category: </p>
												<p>electronics</p>
											</div>
											<div id='grid'>
												<p>Product Subcategory: </p>
												<p>laptops</p>
											</div>
											<div id='grid'>
												<p>Specification: </p>
												<p class='float-right-s'> nigga this is the coolest product ever</p>
											</div>
											<div id='grid'>
												<p>Price: </p>
												<p>2300 ETB</p>
											</div>
											<div id='grid'>
												<p>Available Pieces: </p>
												<p id='calc-quantity'>6</p>
											</div>
								<div id='grid' class='grid-quantity-input'>
												<p class='see-status-change'>Enter Quantity: </p>
												<input id='product_quantity_input' value='1' type='number' max='6' min='1' style='font-family: poppins; text-align: center;
													outline: none; border: none; border-radius:5px; background: #ccc;'>
											</div>
											<div id='buy'>
												<p id='green-success'></p>
												<button id='cart_submit'>Add To Cart <span style='font-family: material;'>shopping_cart</span></button>
											</div>
								</div>
					
				</div>

				<!-- <div class="pro-detail-img">
					<p id="show-img-more">checkout more images <span id="spanner-img" style="font-family: 'material'; font-size: 20px; margin-left: 10px;">expand_more</span></p>
					<div class="image-roller" style="display: none;">
						
					</div>
				</div> -->
			</div>


			<script>
				$(function() {
					let to_show_img = true;

					$("#show-img-more").click(function() {
						this.to_show_img = !this.to_show_img;

						if (this.to_show_img) {
							$(".image-roller").fadeIn(80);
							$("#spanner-img").text("expand_less");
						} else {
							$(".image-roller").fadeOut(80);
							$("#spanner-img").text("expand_more");
						}
					})

					$("#spec").submit(function(e) {
						(e).preventDefault();
						return true;
					});
				});
			</script>
		</div>

		<div class="rating" style="width: 80%; background: #fff; margin: auto;">
			<form class='form-1'>
				<div class="form-field">
					<span class="gl-star-rating gl-star-rating-ltr" data-star-rating="">
						<span style="color: #000; font-family: poppins;">Total rating for this product: &nbsp;</span>
						<span class='gl-star-rating-stars s40'>
							<span data-value='1' data-text='Terrible'></span>
							<span data-value='2' data-text='Poor'></span>
							<span data-value='3' data-text='Good'></span>
							<span data-value='4' data-text='Great'></span>
							<span data-value='5' data-text='Fantastic'></span>
						</span>
					</span>
				</div>
			</form>
		</div>

		<div class="rate-product" style="width: 80%; background: #fff; margin: 40px auto;">
			<div class="col existing-rating" style="border: 2px solid #f4f4f4;">
				<h3>Reviews by users</h3>
				
				<div class='all-review'>
					<div class='top-rev'>
						<div class='avatar'>
							<span>A</span>
						</div>
						<div class='rating-details'>
							<span style='margin-left: 10px;'>Aman Sm</span><br>
							<span class='gl-star-rating-stars s4'>
								<span data-value='1' data-text='Terrible'></span>
								<span data-value='2' data-text='Poor'></span>
								<span data-value='3' data-text='Good'></span>
								<span data-value='4' data-text='Great'></span>
								<span data-value='5' data-text='Fantastic'></span>
							</span><br>
						</div>
					</div>
					<span class='rev-body' style='word-wrap: break-word;'>this product is awesome. i wish i gave it 6 stars</span>
				</div>

				<div class='all-review'>
					<div class='top-rev'>
						<div class='avatar'>
							<span>A</span>
						</div>
						<div class='rating-details'>
							<span style='margin-left: 10px;'>Aman Sm</span><br>
							<span class='gl-star-rating-stars s40'>
								<span data-value='1' data-text='Terrible'></span>
								<span data-value='2' data-text='Poor'></span>
								<span data-value='3' data-text='Good'></span>
								<span data-value='4' data-text='Great'></span>
								<span data-value='5' data-text='Fantastic'></span>
							</span><br>
						</div>
					</div>
					<span class='rev-body' style='word-wrap: break-word;'>this product is awesome. i wish i gave it 6 stars</span>
				</div>

				<div class='all-review'>
					<div class='top-rev'>
						<div class='avatar'>
							<span>A</span>
						</div>
						<div class='rating-details'>
							<span style='margin-left: 10px;'>Aman Sm</span><br>
							<span class='gl-star-rating-stars s40'>
								<span data-value='1' data-text='Terrible'></span>
								<span data-value='2' data-text='Poor'></span>
								<span data-value='3' data-text='Good'></span>
								<span data-value='4' data-text='Great'></span>
								<span data-value='5' data-text='Fantastic'></span>
							</span><br>
						</div>
					</div>
					<span class='rev-body' style='word-wrap: break-word;'>this product is awesome. i wish i gave it 6 stars</span>
				</div>

				<div class='all-review'>
					<div class='top-rev'>
						<div class='avatar'>
							<span>A</span>
						</div>
						<div class='rating-details'>
							<span style='margin-left: 10px;'>Aman Sm</span><br>
							<span class='gl-star-rating-stars s30'>
								<span data-value='1' data-text='Terrible'></span>
								<span data-value='2' data-text='Poor'></span>
								<span data-value='3' data-text='Good'></span>
								<span data-value='4' data-text='Great'></span>
								<span data-value='5' data-text='Fantastic'></span>
							</span><br>
						</div>
					</div>
					<span class='rev-body' style='word-wrap: break-word;'>this product is awesome. i wish i gave it 6 stars</span>
				</div>

				<div class='all-review'>
					<div class='top-rev'>
						<div class='avatar'>
							<span>A</span>
						</div>
						<div class='rating-details'>
							<span style='margin-left: 10px;'>Aman Sm</span><br>
							<span class='gl-star-rating-stars s40'>
								<span data-value='1' data-text='Terrible'></span>
								<span data-value='2' data-text='Poor'></span>
								<span data-value='3' data-text='Good'></span>
								<span data-value='4' data-text='Great'></span>
								<span data-value='5' data-text='Fantastic'></span>
							</span><br>
						</div>
					</div>
					<span class='rev-body' style='word-wrap: break-word;'>this product is awesome. i wish i gave it 6 stars</span>
				</div>

			</div>
			<div class="col new-rating">
				<h3>Give a review: </h3>
				<div id="real-form">
					<form class="form-1" id="pay-form-data" action="#" method="POST">
						<div class="form-input">
							<p>review text</p>
							<div id="to-fix-hit">
								<span style="font-family: 'material';">comment</span>
								<input type="text" name="review_text" placeholder="review here..." maxlength="290" required>
							</div><br>
							<p>rating</p>
							<div class="form-field" style="padding: 0px !important; color: #fff;">
								<span class="gl-star-rating gl-star-rating-ltr" data-star-rating="">
									<select id="glsr-ltr" name="review_rating" class="star-rating" required>
										<option value="">Select a rating</option>
										<option value="5">Fantastic</option>
										<option value="4">Great</option>
										<option value="3">Good</option>
										<option value="2">Poor</option>
										<option value="1">Terrible</option>
									</select>
									<span class="gl-star-rating-stars s30">
										<span data-value="1" data-text="Terrible"></span>
										<span data-value="2" data-text="Poor"></span>
										<span data-value="3" data-text="Good"></span>
										<span data-value="4" data-text="Great"></span>
										<span data-value="5" data-text="Fantastic"></span>
									</span>
									<span class="gl-star-rating-text">Poor</span>
								</span>
							</div>
							<div id="form-pay-btn" style="border: none; display: grid; grid-template-columns: 1fr;">
								<button type="submit" style="width: 100%;" name="submit_review" onmouseover="this.style.opacity= '0.7'; this.style.transition='0.2s';" onmouseout="this.style.opacity= '1'; this.style.transition='0.2s';">submit review</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="rating/src/star-rating.js?ver=3.2.0"></script>
		<script>
			var destroyed = false;
			var starratings = new StarRating('.star-rating', {
				onClick: function(el) {
					console.log('Selected: ' + el[el.selectedIndex].text);
				},
			});
			$('.toggle-star-rating').click(function() {
				if (!destroyed) {
					starratings.destroy();
					destroyed = true;
				} else {
					starratings.rebuild();
					destroyed = false;
				}
			});
		</script>

		<div id="new-body" class="body" style="width: 83%; background: #fff; margin: 20px auto; border-top: 2px solid #f4f4f4;">
			<div class="title" style="text-align: left; font-family: Poppins;">
				<p>similar products</p>
			</div>

			<div id="pro-all" class="pro-all-similar" style="width: 96%;">

	
				
			<a href='#' id='product' class='new-s-col' style='text-decoration: none; color: #191919;' >
				<div class='pro-img'>
								<img src='images/3samsung.jpeg'>
							</div>
					<div id='spec'>
								<div><p>iPhone 12 Pro Max</p><p>price: 34400 ETB</p>
					</div>
					<div>
						<p 
					style='padding: 10px 20px 10px 20px;
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

			<a href='#' id='product' class='new-s-col' style='text-decoration: none; color: #191919;' >
				<div class='pro-img'>
								<img src='images/3samsung.jpeg'>
							</div>
					<div id='spec'>
								<div><p>iPhone 12 Pro Max</p><p>price: 34400 ETB</p>
					</div>
					<div>
						<p 
					style='padding: 10px 20px 10px 20px;
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
			<a href='#' id='product' class='new-s-col' style='text-decoration: none; color: #191919;' >
				<div class='pro-img'>
								<img src='images/3samsung.jpeg'>
							</div>
					<div id='spec'>
								<div><p>iPhone 12 Pro Max</p><p>price: 34400 ETB</p>
					</div>
					<div>
						<p 
					style='padding: 10px 20px 10px 20px;
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
			<a href='#' id='product' class='new-s-col' style='text-decoration: none; color: #191919;' >
				<div class='pro-img'>
								<img src='images/3samsung.jpeg'>
							</div>
					<div id='spec'>
								<div><p>iPhone 12 Pro Max</p><p>price: 34400 ETB</p>
					</div>
					<div>
						<p 
					style='padding: 10px 20px 10px 20px;
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
			<a href='#' id='product' class='new-s-col' style='text-decoration: none; color: #191919;' >
				<div class='pro-img'>
								<img src='images/3samsung.jpeg'>
							</div>
					<div id='spec'>
								<div><p>iPhone 12 Pro Max</p><p>price: 34400 ETB</p>
					</div>
					<div>
						<p 
					style='padding: 10px 20px 10px 20px;
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

		<?php include 'includes/footer.php'; ?>

		<script>
			$(function() {
				let img_name = $(".bigger-img").children("img").attr("src");

				$(".more-pro-images").children("img").click(function() {
					let source = $(this).attr("src");
					$(".bigger-img").children("img").fadeOut(function() {
						$(this).attr("src", source)
					}).fadeIn(100);
					//console.log(source);
				});
			})
		</script>
	</div>



	<script>
		// $(function() {
		// 	$("#product_quantity_input").keyup(function() {

		// 	})

		// 	$("#cart_submit").click(function() {
		// 		var id = window.location.search.replace("?id=", "");
		// 		var quantity = $("#product_quantity_input").val();
		// 		var pro_color = $("#pro_color").val();
		// 		var pro_size = $("#pro_size").val();

		// 		$.post("php/api/add_to_cart.php", {
		// 				product_id: id,
		// 				product_quantity: quantity,
		// 				product_size: pro_size,
		// 				product_color: pro_color
		// 			},
		// 			function(data, status) {
		// 				$("#green-success").text(data);

		// 				if (data != "added to cart successfully.") {
		// 					$("#green-success").css({
		// 						"color": "#b30000",
		// 						"opacity": 1
		// 					});
		// 				} else {
		// 					$("#green-success").css({
		// 						"color": "#003d99", 
		// 						"opacity": 1
		// 					});
		// 					var curr = $("#calc-quantity").text();
		// 					var newvalue = curr - quantity;
		// 					$("#calc-quantity").text(newvalue);
		// 					$("#cart_submit").addClass("btn-cart-success").text("done_all").animate({
		// 						"opacity": 0.5
		// 					});
		// 					$("#product_quantity_input").hide();
		// 					$(".see-status-change").text("Check this product in your cart.");
		// 					$(".grid-quantity-input").css({
		// 						"background": 'indigo',
		// 						"border-radius": "4px",
		// 						"border": "3px solid indigo",
		// 						"color": "#fff"
		// 					});
		// 					$("#cart_submit").fadeOut(50);
		// 				}

		// 				$("#product_quantity_input").val("1");
		// 			}
		// 		);
		// 	});
		// });
	</script>
	<script src="js/script.js"></script>

</body>

</html>