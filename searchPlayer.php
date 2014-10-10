<?php
require_once('queries.php');
$queries = new Queries;
?>

<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>	
<body>
	<?php require_once('navigation.php'); ?>
	
	<div class="container">
		<div class="row">
		    <div class="col-md-3"><?php require_once('leftBar.php');?></div>
		    <div class="col-md-6">
		    	<?php
		    		echo "You searched for: " . $_POST['search'] . "<br>";
		    		echo htmlspecialchars($queries->searchPlayer($_POST['search']));

		    	?>
		    </div>
		    <div class="col-md-3"><?php require_once('rightBar.php');?></div>
		</div>
	</div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</html>