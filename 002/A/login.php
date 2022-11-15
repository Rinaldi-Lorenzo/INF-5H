<html>
	<head>
		<title>PAGINA BENVENUTO</title>
	</head>
	<body>
		<?php
		$_USER=$_POST['username'];
		$_PASSWORD=$_POST['password'];
		
		if($_USER !="LoRii" || $_PASSWORD !="admin")
			echo "PASSWORD O USERNAME ERRATI";
		else
		{
			echo "CIAO" . ' ' . $_USER . '!<br>'; 
		    echo "BENVENUTO NELL'AREA PERSONALE";
		}
		?>
	</body>
</html>
