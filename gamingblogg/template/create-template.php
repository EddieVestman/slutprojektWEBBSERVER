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
<form action="create-template.php" method="post">
  <fieldset>
    <div>
      <label>Rubrik</label>
      <div>
        <input type="text" class="form-control" placeholder="Rubrik">
      </div>
    </div>

    <div>
      <label for="textArea">Beskrivning</label>
      <div>
        <textarea rows="5" "></textarea>
      </div>
    </div>

    <div class="form-group">
      <div>
        <button type="reset">Avbryt</button>
        <button type="submit">Skapa inlägg</button>
      </div>
    </div>
  </fieldset>
</form>				
		
</main>