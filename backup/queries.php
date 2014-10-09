<?php
	class Queries {
		public $mysqli;
		//public $randTeam = rand(0,10);

		public function conn() {
		    $this->mysqli = new mysqli('localhost', 'root', '', 'playerratings');
		}

		public function listNewport() {
			$this->conn();
			$sql = "SELECT teamName FROM teamsleagueu21 WHERE teamName LIKE '%Newport%'";
			$mysqli_results = $this->mysqli->query($sql);
			// iterate through user columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $row['teamName'];
			} // end while
		} // end function

		public function fixtureOpponent() {
			$this->conn();
			$randTeam = rand(1,10);
			$sql = "SELECT teamName FROM teamsleagueu21 WHERE teamName NOT LIKE '%Newport%' AND id='$randTeam'";
			$mysqli_results = $this->mysqli->query($sql);
			// iterate through user columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $row['teamName'];
			} // end while
		} // end function

		public function latestResult() {
			$randNewportScore = rand(0,5);
			$randOtherTeamScore = rand(0,5);
		} // end function

		public function teamOfWeekDefenders() {
			$this->conn();
			$sql = "SELECT playerName, points
					FROM players
					WHERE position='defender'
					ORDER BY points DESC;";		
			$mysqli_results = $this->mysqli->query($sql);
			// array to hold playerName
			$playerNames = array();
			// iterate through player columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				//echo $row['playerName'];
				array_push($playerNames, $row['playerName']);
			} // end while
			//var_dump($playerNames);
			$top4defenders = array_slice($playerNames, 0, 4);
			//var_dump($top4defenders);
			//return $top4defenders;
			/* foreach ($top4defenders as $key => $value) {
				echo $value . ", ";
			}  */
			$leftPer = 10;
			for ($i=0; $i < count($top4defenders); $i++) {?>  
				<?php echo "<div id=\"defenders\" style=\"position: absolute; top: 25%; left:" . $leftPer . "%;\">" . $top4defenders[$i] . "</div>";		
				$leftPer += 20;
			} // end for
		} // end func

		public function teamOfWeekMidfielders() {
			$this->conn();
			$sql = "SELECT playerName, points
					 FROM players
					 WHERE position='midfielder'
					 ORDER BY points DESC;";
			$mysqli_results = $this->mysqli->query($sql);
			// array to hold playerName
			$playerNamesMidfielder = array();
			while ($row = $mysqli_results->fetch_assoc()) {
				array_push($playerNamesMidfielder, $row['playerName']);
			} // end while
			$top4midfielders = array_slice($playerNamesMidfielder, 0, 4);
			$leftPerMidfielders = 10;
			for ($i=0; $i < count($top4midfielders); $i++) {?>
				<?php echo "<div id=\"midfielders\" style=\"position: absolute; top: 55%; left:" . $leftPerMidfielders . "%;\">" . $top4midfielders[$i] . "</div>";		
				$leftPerMidfielders += 20;	
			} // end for
			//var_dump($top4midfielders);
		} // end func

		public function teamOfWeekStrikers() {
			$this->conn();
			$sql = "SELECT playerName, points
			FROM players
			WHERE position='striker'
			ORDER BY points DESC;";
			$mysqli_results = $this->mysqli->query($sql);
			// array to hold playerName 
			$playerNamesStriker = array();
			while ($row = $mysqli_results->fetch_assoc()) {
				array_push($playerNamesStriker, $row['playerName']);
			} // end while
			$top4Strikers = array_slice($playerNamesStriker, 0, 2);
			$leftPerStrikers = 30;
			for ($i=0; $i < count($top4Strikers); $i++) {?>
				<?php echo "<div id=\"strikers\" style=\"position: absolute; top: 85%; left:" . $leftPerStrikers . "%;\">" . $top4Strikers[$i] . "</div>";		
				$leftPerStrikers += 20;	
			} // end for  
		} // end func

		public function u21defenders() {
			$this->conn();
			$sql = "SELECT * 
					FROM players
					WHERE team = 'u21' 
					AND position = 'defender';";
			$mysqli_results = $this->mysqli->query($sql);

			// array to hold defender names
			//$defenders = array();
			//iterate through columns
	
			while ($row = $mysqli_results->fetch_assoc()) {
				echo "id: " . $row['id'] . " Name: " . $row['playerName'] . "<br>";
				//echo "<a href=\"playerDetails.php?id=\"" . $row['id'] . $row['playerName'] . "<br>";
			} // end while
			//return $u21defenders;		
		}  // end func
	} // end class            
 ?>