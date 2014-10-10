<?php
require_once('queries.php');
$queries = new Queries;

$randNewportScore = rand(0,5);
$randOtherTeamScore = rand(0,5);
?>

<div class="leftBar">
	<div class="leftBar-fixture">
		<strong><u><h4>Latest Fixture</h4></u></strong>
		<?php $queries->listNewport();?> <br> <em>vs.</em> <br> <?php $queries->fixtureOpponent();?>
	</div>
<br>
	<div class="leftBar-result">
		<strong><u><h4>Last Result</h4></u></strong>
		<?php $queries->listNewport();?> <?php echo $randNewportScore; ?> <br> <?php $queries->fixtureOpponent();?> <?php echo $randOtherTeamScore;?> 
	</div>
</div>