<?php

	session_start();

					$conn =  mysqli_connect('localhost','root','');
					mysqli_select_db($conn,'wastemgt');

					$locname = $_POST['locname'];
				
					
					$s = "select * from location where locname = '$locname'";
					$result = mysqli_query($conn,$s);

					$num = mysqli_num_rows($result);

					if($num == 1)
					{
						$_SESSION['locname'] = $locname;
						header('location:waste.php');
					}

					else
					{
						header('location:index.html');

					}


						
?>			