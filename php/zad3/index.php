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
	<table border=1>
	<tr>
		<th>ID</th>

		<th>imie</th>
	
		<th>nazwisko</th>
	
		<th>klasa</th>
	</tr>
	<?php
		$mysql_server="localhost";
		
		$mysql_admin="zsot";
		
		$mysql_pass="zsot";
		
		$mysql_db="jelon";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Błąd wyboru bazy");
		
		$wynik = mysqli_query($pol, "SELECT * FROM uczniowie order by nazwisko ");
		while($row=mysqli_fetch_array($wynik))
			{echo "<tr><td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['klasa']."</td></tr>";}
		mysqli_close($pol);
	
	?>
	</table>
</body>
</html>