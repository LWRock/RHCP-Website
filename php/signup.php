<?php
    session_start();
    include('connection.php');
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <script type="text/javascript" src="../javascript/Java.js"></script>
	  <link rel="stylesheet" type="text/css" href="../css/phpsharedcss.css">
    <link rel="stylesheet" type="text/css" href="../css/shared.css" media="screen and (min-width:1025px)">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="bodyText">
	<form id="signinForm" method="post" action="" name="signup-form">
		<div class="form-element">
			<label>Username</label>
				<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
		</div>
		<div class="form-element">
			<label>Email</label>
				<input type="email" name="email" required />
		</div>
		<div class="form-element">
			<label>Password</label>
				<input type="password" name="password" required />
		</div>
			<a href="login.php" id="oppositeLink">Login</a>
			<button id="loginButton" type="submit" name="register" value="register">Register</button>
	</form>



 <div id="NewSidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="catalog.php">Catalog</a>
  <a href="tourdates.php">Tour Dates</a>
  <a href="awards.php">Awards</a>
  <a href="about.php">About</a>
  <a href="login.php">Login</a>
  <a href="logout.php">Logout</a>
</div>

<div id="SidebarButton" onmouseover="showNavButtonText()" onmouseout="hideNavButtonText()">
  <button class="openbtn" id="NavButton" onclick="openNav()"><i class="fa fa-bars"></i></button>
</div>

<div id="NavigationText">
  <p>Navigation</p>
</div>

</body>
</html>