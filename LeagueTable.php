<?php 
require_once('queries.php');
$queries = new Queries;
?>
<table class="table">
    <tr>
      <th>Pos.</th>
      <th>Teams</th>
      <th>GD</th>
      <th>Points</th>
    </tr>
    <?php $queries->u21table(); ?>
