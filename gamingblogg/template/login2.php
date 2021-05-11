<?php
	
	if(empty($_POST['anvnamn'])||empty($_POST['password'])){
	//	header("Location:../html/login.php");
	}
	require "../includes/connect.php";
	
	$anvnamn = filter_input(INPUT_POST,'anvnamn', FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW);
	$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW);
	
	$sql="SELECT losenord, status FROM anvandare WHERE anvnamn=?";
	$res=$dbh->prepare($sql);
	$res->bind_param("s",$anvnamn);
	$res->execute();
	
	$result=$res->get_result();
	$row=$result->fetch_assoc();
	if(!$row)
	{
		header("Location:../html/login.php?status=1");
	}
	else
	{
		if(password_verify($password, $row['losenord']))
		{
			session_start();
			$_SESSION['anvnamn']=$anvnamn;
			$_SESSION['status']=$row['status'];
			header("Location:../html/index.php");
		}
		else
		{
			header("Location:../html/login.php?status=2");
		}
	}
	echo $anvnamn;
	echo "<br>";
	echo $password;
?>