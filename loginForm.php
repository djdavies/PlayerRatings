<?php

$loggedIn = isset($_SESSION['username']);
if($loggedIn){
	
	
	$user = $_SESSION['username'];
	echo $user['username'];
	
}
else{
	?>

<ul class="nav navbar-nav navbar-right">

	<form
	class="navbar-form navbar-right"
	
	method="POST"
	action="doLogin.php"
	>
	<!-- add into style to see div: background-color: red -->
	<span style="width: 100px; height: 100px; margin: 25px;">
	Username: <input type="text" name="username" />
	Password: <input type="text" name="password" />
	<input type="submit" value="Sign in" />
	</form>
	<form class="navbar-form navbar-right"

	method="POST"
	action="RegistrationForm.php"
	>
	<input type="submit" class="btn btn-default" value="Register" />
	</span>

</ul>
<?php
}

?>