<!DOCTYPE html><!-- ZADANIE 3 -->
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
ID:<input type="text" name="id" /></br>
Imie:<input type="text" name="imie" /></br>
Nazwisko<input type="text" name="nazw" /></br>
klasa<input type="text" name="klasa" /></br>
<input type="submit" value="Wylij" />
<form>
<hr>
	<table border=1>
	<tr>
		<th>ID</th>

		<th>imie</th>
	
		<th>nazwisko</th>
	
		<th>klasa</th>
	</tr>
	<?php
		@$imie=$_POST['imie'];
		@$nazw=$_POST['nazw'];
		@$id=$_POST['id'];
		@$klasa=$_POST['klasa'];
		$mysql_server="localhost";
		
		$mysql_admin="zsot";
		
		$mysql_pass="zsot";
		
		$mysql_db="jelon";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Błąd wyboru bazy");
		
		$wynik = mysqli_query($pol, "INSERT INTO uczniowie SET id='$id', imie='$imie', nazwisko='$nazw', klasa='$klasa';");
		if ($wynik)
		{echo "Rekord poprawnie dodany";}
		else
		{echo "Rekord nie został dodany";}
		
		mysqli_close($pol);
	
	?>
	</table>
</body>
</html>