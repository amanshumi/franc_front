
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<script src="scripts/jquery-3.4.1.js"></script>
</head>
<body>
	<div id="main">
		<div class="nav">
			<div id="brand">
				<p>Frank</p>
			</div>
			<div id="navbar">
				<a href="#" class="active">login</a>
				<a href="signup.php">signup</a>
			</div>
			<div id="collapse">
				<span id="shit" style="font-family: 'material'; font-size: 30px; border: 1px solid #fff; border-radius: 3px;">menu</span>
			</div>
		</div>
		<div class="mobile-nav">
			<div id="navbar">
				<a href="#" class="activee">login</a>
				<a href="signup.php">signup</a>
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

		<div class="form-con">
			<div id="title">
				<h1>sign in</h1>
			</div>

			<div id="form-gr">
				<form action="home.php" method="POST">
					<div class="special" id="input" style="font-family: poppins;">
						<p>Email</p>
						<input type="email" name="user_email" placeholder="email..." required>
						<p>Password</p>
						<input type="password" name="user_password" placeholder="password..." required>
					</div>
					<div class="err-class">
						
					</div>
					<div id="btn-gr">
						<button type="submit" name="log_user">login</button>
						<div style="font-size: 14px;">
							<p>new user?</p>
							<a href="signup.php">signup</a>
						</div>
					</div>
					<div id="btn-g" style="">
						<a style="text-decoration: none; color: aqua; font-size: 14px;" href="#">forgot password?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>