
<html>
<head>
</head>
<body>
<?php

	session_start();
		

					$conn =  mysqli_connect('localhost','root','');
					mysqli_select_db($conn,'project');

					$name = $_POST['name'];
					$email = $_POST['email'];
					$numrooms = $_POST['numrooms'];
					$numpeople = $_POST['numpeople'];
					$budget = $_POST['budget'];
					$select1 = $_POST['select1'];
					
					
					$s = "select * from booking where name = '$name'";
					$result = mysqli_query($conn,$s);

					$num = mysqli_num_rows($result);

					if($num == 1)
					   {
						    echo "The name is already registered!";
						}
											

					else
					{
						$book = "insert into booking (name,email,numrooms,numpeople,budget,select1) values ('$name','$email','$numrooms','$numpeople','$budget','$select1')";
						mysqli_query($conn,$book);
					}




?>
	 
</body>
</html>			