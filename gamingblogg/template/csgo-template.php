<?php
	require "../Includes/connect.php";
	
	$sql = "SELECT * FROM inlagg";
	$res = $dbh -> prepare($sql);
	$res -> execute();
	$result = $res -> get_result();

?>

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
            <h1>CS:GO</h1>
			
		
      </header>
      <?php
			require "menu.php";
		
	  ?>			
			<main> <!--Huvudinnehåll-->
				
				Hej och välkommen till gaming bloggen här kan du läsa och publicera egen information om CS:GO eller Valorant. <br> <br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt tristique lorem, et eleifend risus ultrices quis. Suspendisse accumsan blandit enim, eget fermentum tortor ultricies ut. Mauris sagittis at risus sed eleifend. Etiam at porttitor nulla. Pellentesque vulputate arcu eget eros gravida, sit amet volutpat dolor hendrerit. Phasellus magna lacus, placerat non placerat ut, bibendum vitae risus. Fusce sagittis rhoncus urna ac dictum. Nam elementum sagittis velit. Cras nec pulvinar quam, eget accumsan lacus. Aliquam erat volutpat. Nulla fermentum, justo ut congue vestibulum, massa arcu imperdiet lorem, eu gravida dolor lacus ac lectus.

Duis scelerisque est nec metus pharetra suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce non purus fermentum, congue neque eu, finibus nulla. Aenean ullamcorper ipsum lorem, eu consectetur tortor auctor quis. Phasellus enim metus, consequat quis est et, ornare fermentum ex. In ornare, risus sit amet gravida condimentum, diam orci vehicula velit, et interdum augue nulla eu diam. Mauris tincidunt dictum risus. Quisque fermentum elementum ante vel semper. Maecenas in nisl quis nisl congue varius at nec nisl.

Suspendisse justo tellus, sodales vel placerat nec, dapibus sit amet ex. Ut dignissim accumsan enim. Nullam et ultrices nunc. Maecenas quis nisi sit amet augue volutpat ornare in pharetra nulla. Donec rhoncus egestas finibus. Sed a leo turpis. Fusce efficitur tristique finibus. Donec semper turpis id est porttitor pretium. Integer a tempor mi. Nam convallis vitae velit a posuere. Vestibulum eros metus, congue eget metus sed, consequat mattis ipsum. Phasellus a felis est.

Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vitae odio ac sapien luctus efficitur eu sit amet mi. In faucibus tortor est, vel blandit dui porta et. Etiam elementum maximus lorem vitae molestie. Nulla vel tempus eros. Mauris convallis auctor ullamcorper. Nullam vitae massa sit amet diam pretium ullamcorper ac sed ligula. Pellentesque tincidunt eleifend dui, vitae lacinia enim sollicitudin eu. Praesent at mollis metus. In quis ornare orci. Pellentesque posuere libero id ligula semper, non accumsan erat lobortis. Morbi lacinia libero diam, id semper urna sodales ac.

Vestibulum mi est, varius ut mi nec, bibendum suscipit urna. Nulla viverra porttitor felis, sit amet sagittis nibh dictum ut. Vivamus pharetra pretium lacus. Aliquam congue quam ultricies, maximus sem et, luctus dolor. Suspendisse bibendum dui vulputate, porttitor ligula ac, sollicitudin orci. Cras vel dolor eu lorem ultricies sagittis. Integer risus ligula, commodo ut turpis sit amet, rhoncus vestibulum purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus vel est nibh. Donec eu malesuada elit, eget volutpat urna. Sed faucibus risus id posuere egestas.			
			
			</main>
			
			<div>	
			<a href="create.php">Skapa inlägg</a>
			
		
		<?php
		while ($row = $result->fetch_assoc()) {
                    echo <<<ARTICLE
                    <article>
				<h2>{$row['rubrik']}</h2>
				<p>{$row['beskrivning']}</p>
				<p>Skriven av: {$row['anv']} || inlägg:{$row['ID']}</p>
			</article>
ARTICLE;
}
	

			?>
	</div>					
		
		</div>
		
		
		<!--Egen fil -->
		<footer>
			 © Eddie Vestmans gamingblogg
		</footer>
  </body>
</html>