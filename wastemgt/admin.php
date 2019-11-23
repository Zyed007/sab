
<!DOCTYPE html>
<html>
	<head>
		<title>ADMIN DETAILS</title>
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body class>
		<div class="form">
			<a class="homebutton" href="loginform.php">GO TO HOMEPAGE</a>
			
			<div class="form2">
				
							<h3>ADMIN DETAILS</h3>

							<form id="admin" name="adminform" class="details" action="connect.php" method="POST">
							<input type="text" class="fields" name="adminid" placeholder="ADMIN-ID" required>
							<br>
							<input type="text" class="fields" name="adminname" placeholder="ADMIN-NAME" required>
							<br>
							<input type="password" class="fields" name="newpass" placeholder="PASSWORD" required>
							<br>
							<button type="submit" class="submit" >LOGIN</button>
						</form>

				</div>
			</div>

	</body>
</html>