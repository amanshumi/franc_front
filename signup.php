
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
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
				<a href="login.php">login</a>
				<a href="#" class="active">signup</a>
			</div>
			<div id="collapse">
				<span id="shit" style="font-family: 'material'; font-size: 30px; border: 1px solid #fff; border-radius: 3px;">menu</span>
			</div>
		</div>

		<div class="mobile-nav">
			<div id="navbar">
				<a href="login.php">login</a>
				<a href="#" class="activee">signup</a>
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
				<h1>create a new account</h1>
			</div>

			<div id="form-gr">
				<form action="home.php" method="POST">
					<div id="input" style="font-family: poppins;">
						<p>First Name</p>
						<input type="text" name="first_name" placeholder="first name..." required>
						<p>Last Name</p>
						<input type="text" name="last_name" placeholder="last name..." required>
						<p>Email Address</p>
						<input type="email" name="user_email" placeholder="email address..." required>
						<p>Password</p>
						<input type="password" name="user_password" placeholder="password..." required>
						<p>Phone</p>
						<input type="text" name="user_phone" placeholder="phone..." required>
						<p>Address</p>
						<input type="text" name="user_addr" placeholder="addr..." required>
					</div>
					<div id="btn-gr">
						<button type="submit" name="user_register">signup</button>
						<div>
							<p>have an account?</p>
							<a href="login.php">login</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>