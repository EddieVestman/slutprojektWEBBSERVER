<?php
require "../includes/connect.php";

$anvnamn = $_SESSION['anvnamn'];

$sql="SELECT * FROM anvandare WHERE anvnamn=?" ;

$res=$dbh->prepare($sql); // förbereder för ett "statment"
	$res->bind_param("s",$anvnamn);
	$res->execute();
	$result=$res->get_result(); // ger ett resultat från ett förbereda statment
	//$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Adminsida</title>
		 <link rel="stylesheet" href="css/stilmall.css">
  </head>
    <div id="wrapper">
    <?php
		require "menu.php";
	?>		
		<main> 
			<section id="content">
				<table>
					<thead>
						<tr>
							<th>Username</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($row=$result->fetch_assoc()) 
							{
								echo "<tr><td>";
								echo $row["anvnamn"];
								echo "</td><td>";
								echo $row["epost"];
								echo "</td></tr>";
							}	
						?>
					</tbody>
				</table>
				<a href="logout.php">logout</a>
			</section>
		</main>
	</div>
  </body>
</html>