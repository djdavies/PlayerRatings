<?php
	$mysqli = new mysqli('localhost', 'root', '', 'playerratings');
	$results = $mysqli->query(
		"select * from users where username='$_POST[username]' and password='$_POST[password]' and email='$_POST[email]'" 
	);

	if($results->num_rows == 1) {

	$user = $results->fetch_assoc();
	$_SESSION['user'] = $user;

	echo 'User already exists ';

	}
	else {
		// insert username into users table
		$insert = $mysqli->query(
			"INSERT INTO users(`id`, `username`, `email`, `password`) 
			VALUES ('','$_POST[username]','$_POST[email]', '$_POST[password]')"	
		);

	echo 'Welcome new user';
	}

	header('location: /playerratings');
?>
