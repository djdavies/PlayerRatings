<?php
require_once('queries.php');
$queries = new Queries;

$randNewportScore = rand(0,5);
$randOtherTeamScore = rand(0,5);
?>

<div class="leftBar">
	<div class="leftBar-fixture">
		<strong><h4>Latest result</h4></strong>
		<?php $queries->listNewport();?> <br> <em>vs.</em> <br> <?php $queries->fixtureOpponent();?>
	</div>

	<div class="leftBar-result">
		<strong><h4>Next fixture</h4></strong>
		<?php $queries->listNewport();?> <?php echo $randNewportScore; ?> <br> <?php $queries->fixtureOpponent();?> <?php echo $randOtherTeamScore;?> 
	</div>
</div>