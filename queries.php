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
			/*$sql = "SELECT teamName 
					FROM teamsleagueu21 
					WHERE teamName 
					LIKE '%Newport%'";*/

			if ($stmt = $this->connect->prepare(
					"SELECT teamName 
					FROM teamsleagueu21 
					WHERE teamName
					LIKE ?")) 
			{

				// bind parameters
				$condition = '%Newport%';
				$stmt->bind_param("s", $condition);

				// execute query 
				$stmt->execute();

				// bind result variables
				$results = $stmt->get_result();

				printf("teamname is %s\n", $results->fetch_assoc()['teamName']);

				// close statement
				$stmt->close();
			}
		}	

			/* $mysqli_results = $this->connect->query($stmt);
			// iterate through user columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $row['teamName'];
			} // end while
		} // end function */

		public function fixtureOpponent() {
			$randTeam = rand(2,10);
			try {
				$sql = "SELECT teamName 
						FROM teamsleagueu21 
						WHERE teamName NOT 
						LIKE '%Newport%' 
						AND id='$randTeam'";
				$mysqli_results = $this->connect->query($sql);
			} catch(Exception $e) {
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}

			// iterate through user columns...
			while ($row = $mysqli_results->fetch_assoc()) {
				echo $row['teamName'];
			} // end while
		} // end function

		public function latestResult() {
			$randNewportScore = rand(1,5);
			$randOtherTeamScore = rand(1,5);
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
			$i = 1;
			while ($row = $mysqli_results->fetch_assoc()) { 
				if ($i % 3 == 0)
					echo '<div class="row">';
				echo
					"<div class=\"col-sm-4 col-md-4\">" .
						"<div class=\"thumbnail\" >" .
							"<img data-src=\"holder.js/200x200\">" .
							"<div class=\"caption\">" .
								"<h3>" . $row['playerName'] . "</h3>" .
								"<p>" . "Nationality: " . $row['nationality'] . "</p>" .
								"<p>" . "Age: " . $row['age'] . "</p>" .
								"<p>" . "Height: " . $row['height'] . "</p>" . 
								"<p>" .  "Weight: " . $row['weight'] . "</p>" .
								"<p><a href=\"u21Defenders?playerID=" . $row['id'] . "\"class=\"btn btn-primary\" role=\"button\">Button</a></p>".
							"</div>" .
						"</div>" .
					"</div> ";
				if ($i % 3 == 0)
					echo '</div>';
				$i++;
			} // end while	
			// echo '</div>';
		}  // end func

		public function u21table (){
			$sql = 	"SELECT teamName, gd, points 
					FROM teamsleagueu21 
					ORDER BY points DESC";

			$mysqli_results = $this->connect->query($sql);	
			
			$posCount = 1;

			while ($row = $mysqli_results->fetch_assoc()) {
				echo
    			"<tr>" .
      			"<td>" . $posCount. "</td>" .
      			"<td>" .  $row['teamName'] . "</td>" .
			    "<td>" . $row['gd'] . "</td>" .
			    "<td>" . $row['points'] . "</td>" .
			    "</tr>";
			    
			    $posCount++;
			} 

			/*<table class="table">
  <thead>
    <tr>
      <th>Pos.</th>
      <th>Teams</th>
      <th>GD</th>
      <th>Points</th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th>Pos.</th>
      <th>Teams</th>
      <th>GD</th>
      <th>Points</th>
    </tr>
  </thead>*/

		}

		/* 
<div class="col-sm-4 col-md-4">
	<div class="thumbnail">
	<img data-src="holder.js/200x200">
	<div class="caption">
		<h3>Name</h3>
		<p>Nationality: Argentinian </p>
		<p>DOB: dd/mm/yy</p>
		<p>Height: 167cm</p>
		<p>Weight: 180xx</p>
		<p><a href="#" class="btn btn-primary" role="button">Button</a></p>
		</div>
	</div>
	</div>

	------------------------------------------------

	<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img data-src="holder.js/200x200">
					<div class="caption">
						<h3>Name</h3>
						<p>Nationality: Argentinian </p>
						<p>DOB: dd/mm/yy</p>
						<p>Height: 167cm</p>
						<p>Weight: 180xx</p>
						<p><a role="button" class="btn btn-primary" href="#">Button</a></p>
			  		</div>
					</div>
		  		</div>
		*/

		public function searchPlayer ($playerNameSearch) {
			$sql = "SELECT * 
					FROM players
					WHERE playerName 
					LIKE '%$playerNameSearch%'
					ORDER BY points DESC;";
			$mysqli_results = $this->connect->query($sql);
			
			while ($row = $mysqli_results->fetch_assoc()) {
				echo "Player: " . htmlspecialchars($row['playerName']);
			} // end while		
		} // end func

		function __destruct() {
			// close connection: mysql_close won't
			// accept object
			$this->connect = null;		
		}
	} // end class            
 ?>