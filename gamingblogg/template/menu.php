<?php
	if(!isset($_SESSION['username'])) {
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
	else{
		if($_SESSION['status']==1){
			echo<<<NAV
			<nav>
				<u1>
					<li><a href="csgo.php">CS:GO</a></li>
					<li><a href="valorant.php">VALORANT</a></li>
					<li><a href="login.html">Logga in/registrera</a></li>
					<li><a href="admin.html">Logga in/registrera</a></li>
				</ul>
			</nav>
NAV;
			
		}
	}
?>