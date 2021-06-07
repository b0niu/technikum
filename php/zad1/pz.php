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
<h1>Wynik Zamówienia</h1>
<?php
	$ic=$_POST['ilosccia'];
	$il=$_POST['iloscliz'];
	$ib=$_POST['iloscbat'];
	echo'<p>Zamówienia przyjęte.</p>';
	echo'Zamówiles ';
	echo $ic + $il + $ib;
	echo 'produktów o:'.date('H:i:s');
	$ilosc=$ic + $il + $ib;
	
	switch($ilosc)
	{case $ilosc < 10:
			$rabat = 0;
			echo '<br />Rabat wynosi:'.$rabat.'%';
			break;
	case $ilosc >= 10 && $ilosc <= 49:
			$rabat = 5;
			echo '<br />Rabat wynosi:'.$rabat.'%';	
			break;
	case $ilosc >= 50 && $ilosc <= 99:
			$rabat = 10;
			echo '<br />Rabat wynosi:'.$rabat.'%';
			break;
	case $ilosc > 100:
			$rabat = 15;
			echo '<br />Rabat wynosi:'.$rabat.'%';	
			break;			
	}	
	
	/*	{$rabat = 0;}
	else if ($ilosc >= 10 && $ilosc <= 49)
		{$rabat = 5;}
	else if ($ilosc >= 50 && $ilosc <= 99)
		{$rabat = 10;}
	else if ($ilosc > 100)
		{$rabat = 15;}

	echo '<br />Rabat wynosi:'.$rabat.'%';*/
	if(isset($_POST['jak']))
	{
	$jak = $_POST['jak'];
	switch($jak)
	{case "a":
		echo '<br />Koszt dostawy 0zł';
		break;
	case "b":
		echo '<br />Koszt dostawy 15zł';
		break;
	case "c":
		echo '<br />Koszt dostawy 6zł';
		break;
	case "d":
		echo '<br />Koszt dostawy 8zł';
		break;
		}
	}	
?>	 
</body>
</html>