<section class="login_section">
	<div class="container">
		<div class="login_box">
			<form action="/login/login" method="POST">
				<div class="login_group">
					<input type="text" name="login" placeholder="Username">
				</div>
				<div class="login_group">
					<input type="password" name="pass" placeholder="Password">
				</div>
				<div class="login_group">
					<button type="submit" class="btn">Log in</button>
				</div>
			</form>
		</div>
	</div>
</section>

<style type="text/css">
	.left_menu,
	.content_header {
		display: none;
	}
	.content {
		width: 100%;
	}
	.inner_content {
		height: 100vh;
		padding: 0;
	}
</style>