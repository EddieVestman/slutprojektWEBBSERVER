<?php
	$dbh = new mysqli("localhost", "dbUser", "budde751211", "gamingblogg");
	
	if(!$dbh) {
		echo "Ingen kontakt med databasen";
		exit;
	}

?>