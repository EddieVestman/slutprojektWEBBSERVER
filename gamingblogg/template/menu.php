<?php
	if(!isset($_SESSION['anvnamn'])) { //Om man inte är inloggad ser menyn ut såhär
		echo<<<NAV
		<nav><!--Navigationsmeny-->
			<ul>	
				<li><a href="index.php">Startsida</a></li>
				<li><a href="csgo.php">CS:GO</a></li>
				<li><a href="valorant.php">VALORANT</a></li>
				<li><a href="login.php">Logga in/registrera</a></li>
				
			</ul>
		</nav>
NAV;
	}
	elseif ($_SESSION['status']==1){ //Om man är tilldelad status 1 ser menyn ut såhär
			echo<<<NAV
			<nav>
				<ul>
					<li><a href="index.php">Startsida</a></li>
					<li><a href="csgo.php">CS:GO</a></li>
					<li><a href="valorant.php">VALORANT</a></li>		
					<li><a href="logout.php">Logga ut</a></li>					
				</ul>
			</nav>
NAV;
			
		}
		
	elseif($_SESSION['status']==2){//Om man är tilldelad status 2 ser menyn ut såhär
			echo<<<NAV
			<nav>
				<ul>
					<li><a href="index.php">Startsida</a></li>
					<li><a href="csgo.php">CS:GO</a></li>
					<li><a href="valorant.php">VALORANT</a></li>				
					<li><a href="admin.php">Admin</a></li>
				</ul>
			</nav>
NAV;
			
		}
	
	
?>