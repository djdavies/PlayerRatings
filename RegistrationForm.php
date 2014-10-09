<?php
	
$loggedIn = isset($_SESSION['user']);

if($loggedIn){
	$user = $_SESSION['user'];
	echo $user['name'];
}
else {
?>
<!doctype html>
<html lang ="en">
	<form
	method="POST"
	action="doRegistration.php"
	>
	
		Username: <input type="text" name="username" /> 
		Password: <input type="password" name="password" />
		Email:    <input type="text" name="email" />
		<input type="submit" value="Register" />
	</form>
</html>	
<?php
}							
?>