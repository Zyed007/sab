
<?php
	
	session_start();

			$conn =  mysqli_connect('localhost','root','');
			mysqli_select_db($conn,'wastemgt');

					$username = $_POST['username'];
					$newpass = $_POST['password'];

			        $s = "select * from registeration where username = '$username' && password = '$newpass'";
					$result = mysqli_query($conn,$s);

					$num = mysqli_num_rows($result);

					if($num == 1)
					{
						$_SESSION['username'] = $username;
						header('location:req.php');
					}

					else
					{
						header('location:index.html');

					}


?>