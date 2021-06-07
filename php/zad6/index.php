<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	</head>
	<body>
		
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				Login: <input type="text" name="login"/><BR>
				Hasło: <input type="password" name="haslo"/><br>
				<input type="submit" value="Wyślij">
			</form>
		<?php
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			$tab_login = array('Robert','Jacek','Ania','Daniel');
			$tab_haslo = array('haslo1','haslo2','haslo3','haslo4');
			$klucz_haslo = array_search($haslo, $tab_haslo);
			$klucz_login = array_search($login, $tab_login);
			if($klucz_haslo==$klucz_login && in_array($login, $tab_login))
			{
				echo 'Hasło i login są poprawne';
			}
			else if(in_array($login, $tab_login) && $klucz_haslo!=$klucz_login)
			{
				echo'Login poprawny hasło nie';
			}
			else
			{
				echo 'Loginy dostępne w tablicy: ';
				foreach($tab_login as $wartosc)
				{
					echo $wartosc," ";
				}
			}
				?>
	</body>

</html>