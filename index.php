<!DOCTYPE html>

<html>
<head>
	<title>HTML5 Login</title>
	<link rel="stylesheet" href="view/normalize.css">
	<link rel="stylesheet" href="view/style.css">
</head>
<body>
	<section class="loginform cf">
		<form name="login" class="forms" action="connection.php" method="get">
			<ul>
				<li>
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="username" required>
				</li>
				<li>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="password" required></li>
				<li>
					<input type="submit" value="Login">
				</li>
			</ul>
		</form>
	</section>



</body>
</html>
