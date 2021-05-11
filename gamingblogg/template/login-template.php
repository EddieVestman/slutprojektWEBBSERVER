<?php
	$str="";
	if(isset($_GET["status"])){
		if($_GET["status"]==1){
			$str="Felaktigt användare";
		}
		elseif($_GET["status"]==2){
			$str="Felaktigt lösenord";
		}
	}
?>

<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Logga in</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="login">
    <div id="wrapper">
     	<header><!--Sidhuvud-->
            <h1>Gaming Bloggen Logga in</h1>
      </header>
      
      <?php	
			require "menu.php";
			
		?>
		
			<main> 
				<section>
			<form action="../template/login2.php" method="post">
            <p><label for="user">Användarnamn:</label>
            <input type="text" id="user" name="anvnamn"></p>
            <p><label for="pwd">Lösenord:</label>
            <input type="password" id="pwd" name="password"></p>
            <p>
            <input type="submit" value="Logga in">
            </p>
          </form>
          <p class="create"><a href="createUser.php">Skapa användare</a></p>
				</section>
			</main>

    </div>
    <footer>
			 © Eddie Vestmans gamingblogg
		</footer>

	</body>
</html>
