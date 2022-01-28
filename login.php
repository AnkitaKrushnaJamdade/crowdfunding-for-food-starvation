<?php
    include_once 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" href="CSS/style.css">

</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>Let's Together feed the world!!</h1>
				<p>One step to end food insecurity.</p>
			</div>
		</div>


		<div class="right">
			<h5>LOGIN</h5>
			<form action="login.inc.php" method="post">
				<div class="input-boxes">
					<div class="inputs">
						<i class="fas fa-envelope"></i>
						<input type="text" name="uid" placeholder="Username/Email">
					</div>
					<div class="inputs">
						<i class="fas fa-lock"></i>
						<input type="password" name="pwd" placeholder="Password">
					</div>
	<?php
        if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<div class='alert'><p>Must fill in all fields!</p></div>";
        }
        else if($_GET["error"] == "wronglogin") {
            echo "<div class='alertsucess'><p>Incorrect login!</p></div>";
        }
        } 
   ?>
					<div class="btn">
						<button type="submit" name="submit">Login</button>
					</div>
					<br><br>
					<div class="text sign-up-text">Don't have an account? <a href="signup.php"> Sigup now</a></div>
				</div>
			</form>
		</div>
	</div>
	
</body>

</html>
<?php
    include_once 'footer.php';
?>