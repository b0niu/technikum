<!DOCTYPE html>
<html>
<head>
<title>Nasze Hobby</title>
<meta charset="utf-8">
<link  type="text/css" href="hobby.css" rel="stylesheet" />
</head>
<body>

<div class="wszystko">


	<div id="banner">
	
		<h1>FORUM HOBBYSTYCZNE</h1>
		
	</div>
	<div id="lewy">
	
		<?php
		$login=$_POST['login'];
		$haslo=$_POST['haslo'];
		$nick=$_POST['nick'];
		$hobby=$_POST['hobby'];
		$zawod=$_POST['zawod'];
		
		echo "konto ".$nick." zostało zarejestrowane na forum hobbystycznym";
		
		$blogin="root";
		$bhaslo="";
		$serwer="localhost";
		$baza="forum";
		
		
		$polaczenie=@mysqli_connect($serwer,$blogin,$bhaslo,$baza);
		
		
		@mysqli_select_db($polaczenie);
		
		
		$plecp=$_POST['pleckm'];
			switch($plecp)
			{
				case "mezczyzna": 
				$plec="M";
				break;
				
				case "kobieta": 
				$plec="K";
				break;	
			}
		
		
		$wwynik=mysqli_query
		($laczenie_z_baza_danych,"INSERT INTO uzytkownicy (nick,zainteresowania,zawod,plec) VALUE ('$nick','$hobby','$zawod','$plec')");
		$wynik=mysqli_query
		($laczenie_z_baza_danych,"INSERT INTO konta (login,haslo) VALUE ('$login','$haslo')");
		

		
		
		mysqli_close($polaczenie);
		?>
	</div>
	
	<div id="prawy">
	
		<h3>TEMATY NA FORUM</h3>
		<ul>
			<li>Hodowla zwierząt</li>
			<ul>
				<li>psy</li>
				<li>koty</li>
			</ul>
			<li>Muzyka</li>
			<li>Gry komputerowe</li>
		<ul>
		
		
		
	</div>
	
	
</div>


</body>
</html>
