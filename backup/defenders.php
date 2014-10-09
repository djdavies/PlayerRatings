<?php 
require_once('teamOfWeek.php');
class Defenders {
	public function defendersWeek() {	
		foreach ($defenders as $value) {
			$defendersRow .= $value;
		}
	}	
}
?>