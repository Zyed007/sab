
<?php
	
	session_start();

			$conn =  mysqli_connect('localhost','root','');
			mysqli_select_db($conn,'wastemgt');

					$adname = $_POST['adminame'];
					$newpass = $_POST['password'];

			        $s = "select * from admin where adname = '$adminame' && password = '$newpass'";
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