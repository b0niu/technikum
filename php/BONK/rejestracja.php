<!DOCTYPE html>
<html>
<head>
	<title>Nasze Hobby</title>
	
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="pl" />
	
	<link rel="stylesheet" href="hobby.css" type="text/css">
</head>
<body>
<div id="pojemnik">
	<div id="baner">
		<h1>FORUM HOBBYSTYCZNE</h1>
	</div>
	<div id="lewy">
		<?php
		@$nick=$_POST['nick'];
		@$hobby=$_POST['hobby'];
		@$zawod=$_POST['zawod'];
		@$plec=$_POST['plec'];
		@$login=$_POST['login'];
		@$haslo=$_POST['haslo'];
		
		echo "Konto ".$nick." zostało zarejestrowane na forum<BR />";
	
		@$uzlog='root';
		@$uzhasl='';
		@$baza='forum';
		
		$pol= mysqli_connect('localhost',$uzlog,$uzhasl,$baza)
		or die ("Błąd podczas logowania");
		
		mysqli_select_db($pol, $baza)
		or die("Błąd podczas wyboru bazy");
		
		$wynik1=@mysqli_query($pol, "INSERT INTO uzytkownicy SET nick='$nick', zainteresowania='$hobby', zawod='$zawod', plec='$plec';");
		$wynik2=@mysqli_query($pol, "INSERT INTO konta SET  login='$login', haslo='$haslo';");
		if($wynik1 && $wynik2)
		{echo "";}
		else
		{echo "";}
		
		mysqli_close($pol);
		
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
		</ul>
	</div>
</div>
</body>
</html>