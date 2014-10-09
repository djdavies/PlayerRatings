<?php
require_once('navigation.php');
require_once('queries.php');
$queries = new Queries;
?>

<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>	
<div class="row">
        <div class="col-md-3"><?php require_once('leftBar.php');?></div>
        <div class="col-md-6"><?php $queries->u21defenders();?></div>
        <div class="col-md-3"><?php require_once('rightBar.php');?></div>
      </div>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>