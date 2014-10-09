<?php
// ensure we access persistent session
session_start();
//var_dump($_POST);
$mysqli = new mysqli('localhost', 'root', '', 'playerratings');
$results = $mysqli->query(
	"select * from users where username='$_POST[username]' and password='$_POST[password]'"
);

if ($results && $results->num_rows == 1) {
	// found a user
	echo 'found';
	$user = $results->fetch_assoc();
	$_SESSION['user'] = $user;
	echo "Successfully logged in";
}
else {
	// err: bad uname/pword
	echo 'err: not found';
}

// redirect back to homepage
//header('location: /playerRatings/navigation.php');
?>