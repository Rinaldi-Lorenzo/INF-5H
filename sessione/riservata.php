<?php session_start(); ?>
<html>
	<head>
		<title>Pagina Riservata</title>
	</head>
		<body>
<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
				<h1>Benvenuto nella pagina riservata</h1>
				<a href="index.php"><h4>Homepage</h4></a>
				<a href="logout.php"><h4>Logout</h4></a>
<?php			}
?>
	</body>
</html>
