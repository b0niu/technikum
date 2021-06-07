<!DOCTYPE html><!-- ZADANIE 7 -->
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
Imie:<input type="text" name="imie" /></br>
Nazwisko<input type="text" name="nazw" /></br>
PESEL<input type="text" name="pesel" /></br>
Wiek<input type="text" name="wiek" /></br>
<input type="submit" value="Wyślij" />
<form>
<hr>

	<?php
	$imie= $_POST['imie'];
	$nazw=$_POST['nazw'];
	$pesel=$_POST['pesel'];
	$wiek=$_POST['wiek'];
	if(!empty($imie) && !empty($nazw) && !empty($pesel) && !empty($wiek))
	{
	$godz = date('H:i:s');
	$txt = $imie." ".$nazw." ".$pesel." ".$wiek." ".$godz."\n";
	$DOCUMENT_ROOT =$_SERVER['DOCUMENT_ROOT'];
	$dane =fopen("info.txt", 'ab');
	flock($dane, LOCK_EX);
	if(!$dane)
		{
			echo "<p><strong>Błąd!</strong></p>";
			exit;
		}
	fwrite($dane,$txt,strlen($txt));
	flock($dane,LOCK_UN);
	fclose($dane);
	$dane = fopen("info.txt", 'rb');
	if(!$dane)
		{
		echo "<p><strong>Brak wpisów.</strong></p>" ;
		exit;
		}
	while(!feof($dane))
		{
		$wypis= fgets($dane, 65);
			echo $wypis."</br>";
		}
	fclose($dane);
	}
	else
	{
	echo "Wprowadź dane";
	
	}	
	?>	
	
</body>
</html>