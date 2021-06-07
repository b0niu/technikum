<!DOCTYPE html><!-- ZADANIE 1 -->
<html>
<head>
	<title></title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<meta http-equiv="content-language" content="pl"/>
	
	<style type="text/css">
	body
	{
		background-color: #696969;
		color: #ffffff;
		font-family: Verdana;
	}
	</style>
</head>
<body>
<?php
	$im=$_POST['imie'];
	$naz=$_POST['nazwisko'];
	$wi=$_POST['wiek'];
	
	echo $im.$naz;
	echo '<br />'.$wi;

	
	
	
	
	
	if(isset($_POST['klasa']))
	{
	$kl = $_POST['klasa'];
	switch($kl)
	{case "a":
		echo '1TI';
		break;
	case "b":
		echo '2TIB';
		break;
	case "c":
		echo '3TII';
		break;
	case "d":
		echo '3TIM';
		break;
	case "e":
		echo '4TI';
		break;
		}
	}	
?>	 
</body>
</html>