<?php 

		session_start();
		if(!isset($_SESSION['username']))
		{
			header('location:index.html');
		}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>REQUEST</title>
		<link href="css/styleS.css" rel="stylesheet"  />
    </head>
    
	<body class="bookback">
		
			<h1>WELCOME <?php echo $_SESSION['username']."!";?></h1>
			<a href="logout.php"id="logout"><strong>LOGOUT<strong></a>
    
       <form id="location"  action="loc.php"  method="POST">
              <input type="text" class="fields" name="locname" placeholder="ENTER LOCATION" required>
              <br>
              <button type="submit" class="submit">SHOW DETAILS</button>
            </form>
	</body>
</html>

