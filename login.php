<?php 
session_start();
//include("db.php");
$con = mysqli_connect("localhost","root","","finland");

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}

if(isset($_POST['submit']))
{
	if(isset($_POST['name']))
	{
		echo 'name exists';
		if(isset($_POST['pw']))
		{
			$name 		= $_POST['name'];
			$password 	= $_POST['pw'];

			echo 'password exists';
			$sql = "SELECT name, id FROM users WHERE name = '{$name}' AND password = '{$password}'";
			$result = $con->query($sql);
			

			if($result->num_rows > 0)
			{
				$data = $result->fetch_assoc();
				echo 'user exists';
				$_SESSION['user']['id'] = $data["id"];
				$_SESSION['user']['name'] = $data["name"];
				header('location: index.php');
			}
		}
	}
}
$conn->close();
/* if (isset($_POST["name"]) && isset$_POST["pw"])) {
	$name = $_POST["name"];
	$psswrd = $_POST["pw"];
	echo $name.$psswrd;
	if(is_correct_login($name,$psswrd)) {
		$_SESSION["name"] = $name;
		header("index.php"); exit;
	} else {
		header("user.php"); exit;
	}
} */
?> 