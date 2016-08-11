<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","finland");

	if(isset($_POST['submit']))
	{
		if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['pw']) && !empty($_POST['rpw']))
		{
			$name 	= $_POST['name'];
			$email 	= $_POST['mail'];
			$pw 	= $_POST['pw'];
			$rpw 	= $_POST['rpw'];

			$sql = "INSERT INTO users (name, password, email) VALUES ('{$name}', '{$pw}','{$email}')";

			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully
				header('location: index.php');
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
	$conn->close();
?>