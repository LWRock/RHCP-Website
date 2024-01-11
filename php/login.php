<?php
    session_start();
    include('connection.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <script type="text/javascript" src="../javascript/Java.js"></script>
	  <link rel="stylesheet" type="text/css" href="../css/phpsharedcss.css">
    <link rel="stylesheet" type="text/css" href="../css/shared.css" media="screen and (min-width:1025px)">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="bodyText">
	<form id="signinForm" method="post" action="" name="signin-form">
  		<div class="form-element">
    		<label>Username</label>
    		<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
 		 </div>
 		 <div class="form-element">
    		<label>Password</label>
    		<input type="password" name="password" required />
  		</div>
  			<a href="signup.php" id="oppositeLink">Signup</a>
 	 		<button id="loginButton" type="submit" name="login" value="login">Log In</button>
	</form>



<div id="NewSidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Home</a>
  <a href="catalog.php">Catalog</a>
  <a href="tourdates.php">Tour Dates</a>
  <a href="awards.php">Awards</a>
  <a href="about.php">About</a>
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
