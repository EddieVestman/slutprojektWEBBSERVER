<?php
	session_start();

	require "../Includes/connect.php";

	if($_POST["rubrik"] != null && $_POST["beskrivning"] != null)
	{
		$rubrik = filter_input(INPUT_POST,'rubrik', FILTER_SANITIZE_STRING);
		$beskrivning = filter_input(INPUT_POST,'beskrivning', FILTER_SANITIZE_STRING);
		
		$sql = "INSERT INTO inlagg(anv, rubrik, beskrivning) VALUE (?,?,?)";
		$res = $dbh -> prepare($sql);
		$res -> bind_param("sss", $_SESSION['anvnamn'], $rubrik, $beskrivning);
		$res -> execute();
		header('Location: csgo.php');
	}
	
	else
	{
		header('Location: create.php');
	}

?>