<?php session_start(); ?>
<html>
	<head>
		<title> Login </title>
	</head>
		<body>
<?php 		if(!isset($_POST['submit'])){
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
				if($_POST['username']=='admin' && $_POST['password']=='admin'){
						$_SESSION['id'] = $_POST['username'];
						header("location: riservata.php");
					}else {?>
						<h2>Credenziali errate</h2>
						<h4><a href="login.php">Torna al login</a></h4>
<?php     			}
		}
?>
	</body>
</html>
