<!DOCTYPE html><!-- ZADANIE 3 -->
<html>
<head>
	<title>Komis Samochodowy</title>
	
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="pl"/>
	
	<link rel="stylesheet" href="styl.css" type="text/css">
</head>
<body>
<div id="baner" >
	<img src="f1.jpg" alt="F1" />
</div>
<div id="dodaj" >
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<p>Dodaj Kierowce</p>
	Kierowca<input type="text" name="kier" /><br />
	Team<input type="text" name="team" /><br />
	Pkt<input type="text" name="pkt" /><br />
	<input type="submit" value="DODAJ" />
	</form>
		<?php
			@$kier=$_POST['kier'];
			@$team=$_POST['team'];
			@$pkt=$_POST['pkt'];
			
		$mysql_server="localhost";
		
		$mysql_admin="root";
		
		$mysql_pass="";
		
		$mysql_db="formula";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Bł±d wyboru bazy");
		
		$wynik = mysqli_query($pol, "INSERT INTO kierowcy SET kierowca='$kier', team='$team', pkt='$pkt' ;");
		if ($wynik)
		{echo "Rekord poprawnie dodany";}
		else
		{echo "Rekord nie został dodany";}
		
		mysqli_close($pol);


		?>
</div>
<div id="zespol" >

</div>
<div id="kierow" ></div>
<div id="stopka" ></div>



</body>
</html>