<?php
	session_start();

	require "../Includes/connect.php";

	if($_POST["rubrik"] != null && $_POST["beskrivning"] != null)
	{
		
		$sql = "INSERT INTO inlagg(anv, rubrik, beskrivning) VALUE (?,?,?)";
		$res = $dbh -> prepare($sql);
		$res -> bind_param("sss", $_SESSION['anvnamn'], $_POST['rubrik'], $_POST['beskrivning']);
		$res -> execute();
		header('Location: csgo.php');
	}
	
	else
	{
		header('Location: create.php');
	}

?>