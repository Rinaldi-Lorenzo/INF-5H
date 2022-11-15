<html>
<head>
	<title> LOGIN CON IS SET </title>
</head>
<body>
<?php 	if(!isset($_POST['submit'])){
?>
				<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
					<label for="username" type="text">Username</label>
					<input type="text" id="username" name="username" placeholder="Inserisci username">
					<label for="password" type="text">Password</label>
					<input type="password" id="password" name="password" placeholder="Inserisci password">
					<input type="submit" name="submit" value="Invia dati">
		    	</form>	
<?php			
		} else {
				if($_POST['username']!='Lorenzo' || $_POST['password']!='admin') {
					if($_POST['username']!='Mergus' || $_POST['password']!='admin') {
						echo "username o password errati!";
					}else {
					echo "Ciao" . ' ' . $_POST['username'] . '!<br><br>';
					echo "<b>BENVENUTO NELL'AREA RISERVATA!</b>";	
				}
				}
		}
?>
</body>
</html>
