<!DOCTYPE html><!-- ZADANIE 3 -->
<html>
<head>
	<title>Komis Samochodowy</title>
	
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="pl"/>
	
	<link rel="stylesheet" href="auto.css" type="text/css">
</head>
<body>
<div id="cos">
	<div id="baner">
		<h1>Samochody</h1></div>
	<div id="lewy">
		<h2>Wykaz samochodów</h2>
		<ul>
		<?php
		$mysql_server="localhost";
		
		$mysql_admin="root";
		
		$mysql_pass="";
		
		$mysql_db="komis";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Bł±d wyboru bazy");
		
		$wynik = mysqli_query($pol, "SELECT id, marka, model from samochody;");
	
		if(mysqli_num_rows($wynik) > 0)
		{
		while($r = mysqli_fetch_assoc($wynik)) 
		{
        echo "<li>".$r['id']." ".$r['marka']." ".$r['model']."</li>";
		} 
			
		}
		
		mysqli_close($pol);
		?>
		</ul>
		<h2>Zamówienia</h2>
		<ul>
		<?php
		$mysql_server="localhost";
		
		$mysql_admin="root";
		
		$mysql_pass="";
		
		$mysql_db="komis";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Bł±d wyboru bazy");
		
		$wynik = @mysqli_query($pol, "SELECT Samochody_id, Klient from zamowienia;");
	
		if(@mysqli_num_rows($wynik) > 0)
		{
		while($s = @mysqli_fetch_assoc($wynik)) 
		{
        echo "<li>".$s['Samochody_id']." ".$s['Klient']."</li>";
		} 
			
		}
		
		mysqli_close($pol);
		?>
		</ul>
	</div>
	<div id="prawy">
		<h2>Pełne dane fiat</h2>
		<?php
		$mysql_server="localhost";
		
		$mysql_admin="root";
		
		$mysql_pass="";
		
		$mysql_db="komis";
		
		$pol=@mysqli_connect($mysql_server, $mysql_admin, $mysql_pass, $mysql_db)
		or die ("Brak połączenia z serwerem");
		
		@mysqli_select_db($pol, $mysql_db)
		or die ("Bł±d wyboru bazy");
		
		$wynik = @mysqli_query($pol, "SELECT * from samochody where marka='fiat';");
	
		if(@mysqli_num_rows($wynik) > 0)
		{
		while($x = @mysqli_fetch_assoc($wynik)) 
		{
        echo $x['id']." / ".$x['marka']." / ".$x['model']." / ".$x['rocznik']." / ".$x['kolor']." / ".$x['stan']." / <br /> ";
		} 
			
		}
		
		mysqli_close($pol);
		?>
	</div>
	<div id="stopka">
		<table>
			<tr>
				<td><a id="ods" href="kwerendy.txt">Kwerendy</a></td>
				<td>Autor:98032902157</td>
				<td><img src="auto.png" alt="Komis Samochodwy" /></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>