<?php

	session_start();

					$conn =  mysqli_connect('localhost','root','');
					mysqli_select_db($conn,'wastemgt');

					$username = $_POST['username'];
					$emailid = $_POST['emailid'];
					$newpass = $_POST['newpass'];
					
					$s = "select * from registeration where username = '$username'";
					$result = mysqli_query($conn,$s);

					$num = mysqli_num_rows($result);

					if($num == 1)
					{
						echo "USERNAME IS ALREADY TAKEN!!";
											}

					else
					{
						$reg = "insert into registeration (username,emailid,newpass) values ('$username','$emailid','$newpass')";
						mysqli_query($conn,$reg);
						header('location:loginform.php');

						
					}



?>			