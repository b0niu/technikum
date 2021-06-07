<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
	</head>

	<body>
		<h1>Wynik zamówienia:</h1>
		<?php
			$ic=$_POST['ilosccia'];
			$il=$_POST['iloscliz'];
			$ib=$_POST['iloscbat'];
			echo '<p>Zamówienia przyjęte.</p>';
			echo $ic + $il + $ib;
			echo ' produktów o: ' .date('H:i,j F Y');
			
			$ilosc = $ic + $il + $ib;
			
			/*if( $ilosc < 10 )
				$rabat = 0;
			elseif( $ilosc >= 10 && $ilosc <= 49 )
				$rabat = 5;
			elseif( $ilosc >= 50 && $ilosc <= 99 )
				$rabat = 10;
			elseif( $ilosc > 100 )
				$rabat = 15;
			echo '<br>Rabat wynosi: '.$rabat.'%';
			*/
			
			switch ($ilosc) {
				case $ilosc < 10;
					echo '<br>rabat 0%';
					break;
				case $ilosc >= 10 && $ilosc <= 49;
					echo '<br>rabat 5%';
					break;
				case $ilosc >= 50 && $ilosc <= 99;
					echo'<br>rabat 10%';
					break;
				case $ilosc > 100;
					echo'<br>rabat 15%';
					break;
			}
			
			$opcja=$_POST['jak'];
			
			switch ($opcja){
				case $opcja=='a';
					echo '<BR>wybarłeś opcje odbioru osobistego';
					$koszt='0 zł';
					break;
				case $opcja=='b';
					echo '<BR>wybarłeś opcje przesyłki kurierskiej';
					$koszt='15 zł';
					break;
				case $opcja=='c';
					echo '<BR>wybarłeś opcje listu ekonomicznego';
					$koszt='6 zł';
					break;
				case $opcja=='d';
					echo '<BR>wybarłeś opcje listu poleconego';
					$koszt='8 zł';
					break;
			}
		echo '<br>Koszt transportu wyniesie: '.$koszt;
		?>
	</body>

</html>