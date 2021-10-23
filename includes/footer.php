<div class="footer">
	<div id="contact">
		<div id="form">
			<p style="font-size: 19px; font-family: poppins;">subscribe to our newsletter</p>
			<form id="subscribe_form" method="POST">
				<input type="text" name="email_address" id="email_address" placeholder="enter your email..." required>
				<button id="subscribe_submit" style="font-family: 'material'; font-size: 20px;">send</button>
			</form>
			<div class="err-class" style='margin-top: 10px; color: #ff6666; text-align: center; font-family: poppins; font-size: 14px;'>
					<span id="well-span"></span>
			</div>
		</div>
		<div id="info">
			<p style="font-size: 19px; font-family: poppins;">contact us</p>
			<span style="">+251923391778</span>
			<span style="">+251929172065</span>
		</div>
		<div id="info">
			<p style="font-size: 19px; font-family: poppins;">address</p>
			<span style="">Addis Ababa, Ethiopia</span>
			<span style=""></span>
		</div>
	</div>
	<div id="copyright">
		<p>Frank &copy; 2020 All Rights Reserved.</p>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#subscribe_form").on("submit", function(e) {
			e.preventDefault();
			var email_address = $("#email_address").val();
			$.post("php/subscribe_api.php", {email_address}, function(res, status) {
				$("#well-span").text(res);

				if(res == "you have subscribed successfully") {
					$("#well-span").css({"color": "#b3ffb3"});
				} else {
					$("#well-span").css({"color": "#ff6666"});
				}
			});
		});
	});
</script>