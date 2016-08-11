<?php 
	session_start();
	include("top.php"); 
?>
		<header>
<?php
var_dump($_SESSION);
	if(isset($_SESSION['user']))
	{
		echo "<a href='logout.php' id='logoutButton' class='button'>Logout-Button
		Hello {$_SESSION['user']['name']}
		";

	}else
	{
		echo "<a href='#' id='loginButton' class='button'>Login-Button
			<a href='#' id='registerButton' class='button'>Register-Button
		";

	}
?>
			<a href="#" id="storyButton" class="button">Story-Button</a>
		</header>
		<div id="home_image">
			<a href="#pageStart"><img src="img/Moomin_kuva.png" height="150px"/></a>
		</div>
		<div class="mainPage" id="pageStart">
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
		<div id="login_area" class="form_area">
			<div id="login_field" class="form_field">
			<div class="cross">
					x
				</div>
				<form action="login.php" method="post" id="login_form">
					<table>
						<tr>
							<td>Name/Email:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="pw"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="registration_area" class="form_area">
			<div id="registration_field" class="form_field">
				<div class="cross">
					x
				</div>
				<form action="registration.php" method="post" id="register_form">
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="text" name="mail" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="pw" required></td>
						</tr>
						<tr>
							<td>Repeat Password:</td>
							<td><input type="text" name="rpw" required></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="story_area" class="form_area">
			<div id="story_field" class="form_field">
			<div class="cross">
					x
				</div>
				<form action="welcome.php" method="post" id="story_form">
					<table>
						<tr>
							<td>Title:</td>
							<td><input type="text" name="title"></td>
						</tr>
						<tr>
							<td>Story:</td>
							<td><textarea form="story_form" name="story">Enter story here...</textarea></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="comment_area" class="form_area">
			<div id="comment_field" class="form_field">
			<div class="cross">
					x
				</div>
				<form action="welcome.php" method="post" id="comment_form">
					<table>
						<tr>
							<td>Comment:</td>
							<td><textarea form="comment_form" name="comment">Enter comment here...</textarea></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<script>
			$('#loginButton').click(function() {
				$('#login_area').css('display','inline');
			});

			$('#registerButton').click(function() {
				$('#registration_area').css('display','inline');
			});
			
			$('#storyButton').click(function() {
				$('#story_area').css('display','inline');
			});
			
			$('.cross').click(function() {
				$('.form_area').css('display','none');
			})
		</script>
	</body>
</html>