<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","finland");

	if(isset($_POST['submit']))
	{
		if(!empty($_POST['comment']))
		{
			$title 	= $_POST['comment'];
			$user_id = $_SESSION['user']['id'];

			$sql = "INSERT INTO comments (title, story, user_id) VALUES ('{$title}', '{$story}',{$user_id})";

			if ($conn->query($sql) === TRUE) {
			    echo "New story created";
				header('location: index.php');
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
	$conn->close();
?>