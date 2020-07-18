<!DOCTYPE html>
<html>
<head>
	<title>SALA 1 - CINEMA SIMULATOR</title>
</head>
<body>

	<div style="text-align: center;"><H1>SALA 1</H1></div>

	<h3>POSTI DISPONIBILI</h3> <br>

	<?php include 'db/select_view.php'; ?>

	<form action="prenotazione.php">
		<input type="submit" value="PRENOTA" />
	</form>


	<div style="text-align: right;"><a href="#" onclick="history.go(-1);return true;">< indietro</a></div>
</body>
</html>