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
	<!-- Odwołanie do tej samej strony -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	OD:<input type="text" name="od" /><br />
	DO:<input type="text" name="do" /><br />
	<input type="submit" value="Wyślij" />
	</form>
	<table border="0" cellpadding="3">
		<tr>
		<td colspan="2"> Prognozy wzrostu cen paliw w 2017r.</td>
		</tr>
		<tr>
		<td bgcolor="#CCCCCC" align="center">Miesiąc</td>
		<td bgcolor="#CCCCCC" align="center">Koszt</td>
		</tr>	
			<?php
		if (isset($_POST['od'])&&isset($_POST['do']))
		{$koszt = 4.6;
		$koszt1=$koszt;
		$od=$_POST['od'];
		$do=$_POST['do'];
			for($miesiac = $od; $miesiac <= $do; $miesiac++ )
			{echo "<tr>
				<td align=\"right\">".$miesiac."</td>
				<td align=\"right\">".$koszt."</td>
				</tr>\n";
				$koszt+=0.05;
			}
		$sr=($koszt1+$koszt)/2;
			echo "<tr>
				<td bgcolor=\"#CCCC00\" align=\"right\">Średni koszt to</td>
				<td bgcolor=\"#CCCC00\" align=\"right\">".$sr."</td></tr>"	}
		
			?>
	</table>		
</body>
</html>