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
<!-- Odwołanie do tej samej strony -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
liczba 1:<input type="text" name="l1" /><br />
liczba 2:<input type="text" name="l2" /><br />
Dzialanie:<br />
Liczba 1<sup>Liczba 2</sup><input type="radio" name="funk" value="o1"/><br />
Liczba 1!<input type="radio" name="funk" /><br />
NWD(Liczba 1, Liczba 2)<input type="radio" name="funk" /><br />
Czy liczba 2 jest pierwsza<input type="radio" name="funk" /><br />
<input type="submit" value="Oblicz" />
</form>
<hr>

	<?php
	$l1 = $_POST['l1'];
	$l2 = $_POST['l2'];
	switch
		 function potega($l1,$l2)
		 {$wynik=$l1^$l2;
		 echo $wynik;}
	?>	
	
</body>
</html>