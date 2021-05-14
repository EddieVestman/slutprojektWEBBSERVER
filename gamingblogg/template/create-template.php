<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Gaming Bloggen</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="index">
    <div id="wrapper">
      <header><!--Sidhuvud-->
            <h1>Skapa inlägg</h1>
		</header>
<?php
require "menu.php";
		
		
?>
<main> <!--Huvudinnehåll-->
<form action="create2.php" method="post">
			<div><label for="rubrik">Rubrik</label>
			<input type="text" id="rubrik" name="rubrik"> </div>
			
			<div><label for="beskrivning">Beskrivning:</label>
			<textarea rows="7" cols="35" id="beskrivning" name="beskrivning"></textarea></div>
			
			<input type="submit" value="Skapa inlägg">
		</form>
		
</main>