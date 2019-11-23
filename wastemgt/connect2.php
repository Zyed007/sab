<?php

	session_start();

					$conn =  mysqli_connect('localhost','root','');
					mysqli_select_db($conn,'project');

					$userid = $_POST['userid'];
					$emailid = $_POST['emailid'];
					$newpass = $_POST['newpass'];
					
					$s = "select * from registeration where userid = '$userid'";
					$result = mysqli_query($conn,$s);

					$num = mysqli_num_rows($result);

					if($num == 1)
					{
						echo "USERNAME IS ALREADY TAKEN!!";
											}

					else
					{
						$reg = "insert into registeration (userid,emailid,newpass) values ('$userid','$emailid','$newpass')";
						mysqli_query($conn,$reg);
						header('location:login.php');

						
					}



?>			