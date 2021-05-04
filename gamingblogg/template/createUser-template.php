<?php
$str="";

	if (isset($_GET['username'])) {
			$usr=$_GET['username'];
			$str="Användarnamnet $usr upptaget";
		}
		elseif(isset($_GET['email'])) {
				$ma=$_GET['email'];
				$str="Mailadressen $ma är upptagen";
		}
		
	if(!empty($_POST['email'])&&!empty($_POST['username'])&& !empty($_POST['password'])) 
	{
		
		$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_LOW);
		$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$password = password_hash($password, PASSWORD_DEFAULT);

			
		require "../includes/connect.php";
			
		$sql="SELECT * FROM anvandare WHERE anvnamn = ? OR epost = ?";
		$res=$dbh->prepare($sql);
		$res->bind_param("ss",$username, $email);
		$res->execute();
		$result=$res->get_result();
		$row=$result->fetch_assoc();
		
		if($row !== NULL)
		{
			if($row['anvnamn']=== $username) {
				header("location:createUser.php?name=$username");
			}
			elseif($row['epost'] === $email) {
				header("location;createUser.php?email=$email");
			}
		}
		
		else
		{
			$status = 1;
			$sql = "INSERT INTO anvandare(anvnamn, epost, losenord, status) VALUE (?,?,?,?)";
			$res=$dbh->prepare($sql);
			$res->bind_param("sssi",$username, $email, $password, $status);
			$res->execute();
			
			$sql = "INSERT INTO anvandare (anvnamn, epost, losenord, status) VALUE (?,?,?,?,?,?,?)";
			$res=$dbh->prepare($sql);
			$res->bind_param("ssssiss",$username,$email, $password);
			$res->execute();
			$str="Användaren tillagd";
		}
	}
	else
	{
		$str.=<<<FORM
		<form action="createUser.php" method="post">
			<p><label for="email">Epost:</label>
			<input type="email" id="email" name="email"></p>
			<p><label for="username">Användarnamn:</label>
            <input type="text" id="username" name="username"></p>
            <p><label for="pwd">Lösenord:</label>
            <input type="password" id="pwd" name="password"></p>
            <p>
            <input type="submit" value="Skapa användare">
            </p>
          </form>
FORM;
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
            <h1>Skapa användare</h1>
      </header>
      	
			<main> <!--Huvudinnehåll-->
				<section>
					<?php 
						echo "$str"; 
					?>
				</section>
			</main>
    </div>


	</body>
</html>