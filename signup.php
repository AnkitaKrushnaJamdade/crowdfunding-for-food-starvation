<?php
    include_once 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SignUp Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style.css">

</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
			<h1>Let's Together feed the world!!</h1>
		    <p>One step to end food insecurity.</p></div>
		</div>

		<div class="right">
			<h5>SIGNUP</h5>
			<form action="signup.inc.php" method="post">
				<div class="input-boxes">
				  <div class="inputs">
				   <i class="fas fa-id-card-alt"></i>
					<input type="text" name="name" placeholder="Full Name">
				  </div>
				  <div class="inputs">
					<i class="fas fa-envelope"></i>
					<input type="email" name="email" placeholder="Email">
				  </div>
				  <div class="inputs">
					<i class="fas fa-user"></i>
					<input type="text" name="uid" placeholder="Username">
				  </div>
				  <div class="inputs">
					<i class="fas fa-lock"></i>
					<input type="password" name="pwd" placeholder="Password">
				  </div>
				  <div class="inputs">
				    <i class="fas fa-check-circle"></i>
					<input type="password" name="pwdrepeat" placeholder="Confirm Password">
				  </div>
				  <?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<div class='alert'><p>Must fill in all fields!</p></div>";
        }
        else if($_GET["error"] == "invaliduid") {
            echo "<div class='alert'><p>Choose proper username!</p></div>";
        }
        else if($_GET["error"] == "invalidemail") {
            echo "<div class='alert'><p>Choose proper email!</p></div>";
        }
        else if($_GET["error"] == "notstrongpass") {
            echo "<div class='alert'><p>Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character!</p></div>";
        }
		else if($_GET["error"] == "passwordsnotmatch") {
            echo "<div class='alert'><p>Passwords doesn't match!</p></div>";
        }
        else if($_GET["error"] == "invaliduid") {
            echo "<div class='alert'><p>Choose proper username!</p></div>";
        }
        else if($_GET["error"] == "stmtfailed") {
            echo "<div class='alert'><p>Something went wrong, try again!</p></div>";
        }
        else if($_GET["error"] == "usernametaken") {
            echo "<div class='alert'><p>Username already taken!</p></div>";
        }
        else if($_GET["error"] == "none") {
            echo "<div class='alertsucess'><p>Signup Successful!</p></div>";
        }
    } 
?>
				  <div class="btn">
					<button type="submit" name="submit">SignUp</button>
				  </div>
				  <br><br>
				  <div class="text sign-up-text">Already have an account? <a href="login.php">Login now</a></div>
				</div>

			  </form>
		</div>
	</div>
</body>
</html>
<?php
    include_once 'footer.php';
?>