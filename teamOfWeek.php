<?php
require_once('queries.php');
    $queries = new Queries;
?>
<h1 class="text-center">Team of The Week</h1>
    
<?php 
    $defenders = $queries->teamOfWeekDefenders();
    $defendersRow = "";
    var_dump($defenders);
    foreach ($defenders as $value) {
        $defendersRow = $value . " ";
    }
    echo $defendersRow;
?>
</div>
