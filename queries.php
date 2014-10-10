<?php
	class Queries {
		private $connect;

		function __construct() {
			$this->connect = new mysqli('localhost', 'root', '', 'playerratings');	
			if (!$this->connect) {
    			die('Could not connect: ' . mysql_error());
			}
		}

		public function listNewport() {
			$sql = "SELECT teamName FROM teamsleagueu21 WHERE teamName LIKE '%Newport%'";
			$mysqli_results = $this->connect->query($sql);
			// iterate through user columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $row['teamName'];
			} // end while
		} // end function

		public function fixtureOpponent() {
			$randTeam = rand(1,10);
			$sql = "SELECT teamName FROM teamsleagueu21 WHERE teamName NOT LIKE '%Newport%' AND id='$randTeam'";
			$mysqli_results = $this->connect->query($sql);
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
			$sql = "SELECT playerName, points
					FROM players
					WHERE position='defender'
					ORDER BY points DESC
					LIMIT 4;";		
			$mysqli_results = $this->connect->query($sql);
			$leftPerDefenders = 10;
			// iterate through player columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo 
				"<div id=\"defenders\"". 
				"style=\"position: absolute; top: 25%; left:" . 
				$leftPerDefenders . "%;\">" . 
				$row['playerName'] . 
				"</div>";		
				$leftPerDefenders += 20;
			} // end while
		} // end func

		public function teamOfWeekMidfielders() {
			$sql = "SELECT playerName, points
					FROM players
					WHERE position='midfielder'
					ORDER BY points DESC
					LIMIT 4;";		
			$mysqli_results = $this->connect->query($sql);
			$leftPerMidfielders = 10;
			// iterate through player columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo 
				"<div id=\"defenders\"". 
				"style=\"position: absolute; top: 55%; left:" . 
				$leftPerMidfielders . "%;\">" . 
				$row['playerName'] . 
				"</div>";		
				$leftPerMidfielders += 20;
			} // end while
		} // end func

		public function teamOfWeekStrikers() {
			$sql = "SELECT playerName, points
					FROM players
					WHERE position='striker'
					ORDER BY points DESC
					LIMIT 2;";		
			$mysqli_results = $this->connect->query($sql);
			$leftPerStrikers = 30;
			// iterate through player columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo 
				"<div id=\"defenders\"". 
				"style=\"position: absolute; top: 75%; left:" . 
				$leftPerStrikers . "%;\">" . 
				$row['playerName'] . 
				"</div>";		
				$leftPerStrikers += 20;
			} // end while
		} // end func

		public function u21defenders() {
			$sql = "SELECT * 
					FROM players
					WHERE team = 'u21' 
					AND position = 'defender';";
			$mysqli_results = $this->connect->query($sql);
			
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $playerViewDetails = $row['playerName'] . "<br>" .
				"Nationality: " . $row['nationality'] . "<br>" .
				"Age: " . $row['age']. "<hr>";
			} // end while	
		}  // end func

		public function searchPlayer ($playerNameSearch) {
			$sql = "SELECT * 
					FROM players
					WHERE playerName 
					LIKE '%$playerNameSearch%'
					ORDER BY points DESC;";
			$mysqli_results = $this->connect->query($sql);
			
			while ($row = $mysqli_results->fetch_assoc()) {
				echo "Player: " . $row['playerName'];
			} // end while		
		} // end func

		function __destruct() {
			// close connection: mysql_close won't
			// accept object
			$this->connect = null;		
		}
	} // end class            
 ?>