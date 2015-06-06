<html>
	<head>
		<title>Login and Registration</title>
	</head>
	<body>
		<?= $this->session->flashdata('errors')?>
		<div id="login">
			<h2>Login</h2>
			<form action="login" method="post">
				<input type="text" name="email" placeholder="Enter email">
				<input type="password" name="password" placeholder="Enter password">
				<button>Login</button>
			</form>
		</div>
		<div id="login">
			<h2>Registration</h2>
			<form action="register" method="post">
				<input type="text" name="first_name" placeholder="First Name">
				<input type="text" name="last_name" placeholder="Last Name">
				<input type="text" name="email" placeholder="Enter email">
				<input type="password" name="password" placeholder="Enter password">
				<input type="password" name="confirm_password" placeholder="Confirm Password">
				<button>Register</button>
			</form>
		</div>
	</body>
</html>