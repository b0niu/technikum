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
Ilość ocen:<input type="text" name="ilosc" /><br />
<input type="submit" value="Wykonaj" />
</form>
<hr>
<form>
<table>
	<?php
		if (isset($_POST['ilosc']))
		{$ilosc=$_POST['ilosc'];
			for($li=1; $li==$ilosc; $li++)
			{echo "<tr>
				<td align=\"right\"><select name=\"ocena\">
					<option value=\"o1\">1</option>
					<option value=\"o2\">2</option>
					<option value=\"o3\">3</option>
					<option value=\"o4\">4</option>
					<option value=\"o5\">5</option>
					<option value=\"o6\">6</option>
				</select></td>
				<td align=\"right\"><select name=\"ocena\">
					<option value=\"w1\">0.5</option>
					<option value=\"w2\">0.6</option>
					<option value=\"w3\">0.7</option>
					<option value=\"w4\">0.8</option>
					<option value=\"w5\">0.9</option>
					<option value=\"w6\">1</option></td>
				</tr>\n";
			}
			echo "<input type=\"button\" value=\"Oblicz\" onclick=\"licz\(\);\"/>"
	?>	
</table>
</form>		
</body>
</html>