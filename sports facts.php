<!DOCTYPE html>

<?php
$dbh = new PDO('mysql:host=http://localhost:8888/MAMP/index.php?page=phpmyadmin&language=English;dbname=sports_facts', $user, $pass);
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Jordan Kruger | Sports Blogger</title>
		<link rel="stylesheet" href="main.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="project.js" type="text/javascript" charset="utf-8"></script>
		<meta name="viewpoint" content="width=device-width, initial scale=1.0">
	</head>
	<body id="sports-facts">
		<header>
			<a href="index.html" id="logo">
				<h1>Jordan Kruger</h1>
				<h2>Sports Blogger</h2>
			</a>
			<div class="menu">
	         <ul>
	           <li><a href="index.html">About Me</a></li>
	           <li><a href="nba basketball.html">NBA Basketball</a></li>
	           <li><a href="mlb baseball.html">MLB Baseball</a></li>
	           <li><a href="nfl football.html">NFL Football</a></li>
	           <li><a href="ncaa fbs division 1 football.html">NCAA FBS Division 1 Football</a></li>
	           <li><a href="ncaa division 1 basketball.html">NCAA Division 1 Basketball</a></li>
	           <li class="selected"><a href="sports facts.php">Sports Facts</a></li>
	         </ul>
	      </div>
		</header>
		<div id="wrapper">
	        <h3>Random Sports Facts</h3>
	          <table id="facts">
	          <tbody>
	            <tr>
	              <th>MLB Facts</th>
	              <th>NFL Facts</th>
	              <th>College Football Facts</th>
	              <th>NHL Facts</th>
	              <th>College Basketball Facts</th>
	              <th>NBA Facts</th>
<?php
function getMLBFact($conn) {
    $mlbFact = 'SELECT id, fact FROM mlb_facts ORDER BY id';
    foreach ($conn->query($mlbFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>

<?php
function getNFLFact($conn) {
    $nflFact = 'SELECT id, fact FROM nfl_facts ORDER BY id';
    foreach ($conn->query($nflFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>

<?php
function getCollegeFootballFact($conn) {
    $collegeFootballFact = 'SELECT id, fact FROM college_football_facts ORDER BY id';
    foreach ($conn->query($collegeFootballFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>

<?php
function getNHLFact($conn) {
    $nhlFact = 'SELECT id, fact FROM nhl_facts ORDER BY id';
    foreach ($conn->query($nhlFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>

<?php
function getCollegeBasketballFact($conn) {
    $collegeBasketballFact = 'SELECT id, fact FROM college_basketball_facts ORDER BY id';
    foreach ($conn->query($collegeBasketballFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>

<?php
function getNBAFact($conn) {
    $nbaFact = 'SELECT id, fact FROM nba_facts ORDER BY id';
    foreach ($conn->query($nbaFact) as $row) {
        print $row['id'] . "\t";
        print $row['fact'] . "\t";
    }
}
?>
	          </tbody>
	      </table>
	    </div>
	</body>
</html>
