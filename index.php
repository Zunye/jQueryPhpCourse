<!DOCTYPE html>
	<head>
		<title>Moomins - Fun in Helsinki</title>
		
		<!--Meta Tags-->
		<meta charset="UTF-8">
		<meta name="description" content="Moomins - Fun in Helsinki with nice stories">
		<meta name="keywords" content="Moomins,Helsinki,Traveltips,Stories">
		<meta name="author" content="Zarina, Menno, Benjamin">
		<!--End of Meta Tags-->
		
		<!--External CSS and JavaScript Files-->
		<link rel="stylesheet" href="css/styles.css">
		<script src="script.js"></script>
		<!--End of external files-->
		<!--jQuery from Google-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!--End of jQuery from Google-->
		
	</head>
	<body>
		<header>
			<a href="login.php" class="button">Login-Button</a>
		</header>
		<div class="mainPage">
			<p>Some Text with an Image</p>
		</div>
		<div class="storyShortcut">
			<a href="#story1">Story 1</a>
			<a href="#story2">Story 2</a>
			<a href="#story3">Story 3</a>
		</div>
		<div class="storyPages">
			<div id="story1">
				<p>First story</p>
			</div>
			<div id="story2">
				<p>Second story</p>
			</div>
			<div id="story3">
				<p>Third story</p>
			</div>
		</div>
		<div id="login_area" class="formArea">
			<div id="login_field" class="formField">
				<form action="welcome.php" method="post">
					<table>
						<tr>
							<td>Name/Email:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="pw"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="registration_area" class="formArea">
			<div id="registration_field" class="formField">
				<form action="welcome.php" method="post">
					<table>
						<tr>
							<td>Email:</td>
							<td><input type="text" name="mail"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="pw"></td>
						</tr>
						<tr>
							<td>Repeat Password:</td>
							<td><input type="text" name="rpw"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="story_area" class="formArea">
			<div id="story_field" class="formField">
				<form action="welcome.php" method="post">
					<table>
						<tr>
							<td>Title:</td>
							<td><input type="text" name="title"></td>
						</tr>
						<tr>
							<td>Story:</td>
							<td><input type="text" name="story"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="comment_area" class="formArea">
			<div id="comment_field" class="formField">
				<form action="welcome.php" method="post">
					<table>
						<tr>
							<td>Comment:</td>
							<td><input type="text" name="comment"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>