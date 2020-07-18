<!DOCTYPE html>
<html>
<head>
	<title>VERIFICA BIGLIETTI</title>
</head>
<body>

	STAI ACQUISTANDO I BIGLIETTI: <br> <br>







	<form method="post" action="db/pay_confirm.php">
		<?php $array1 = include 'db/select_verifica.php'; ?>

		<div style="text-align: right;">
			<?php $sumprezzo = include 'db/select_sum.php'; ?>
		</div>

		<input type="submit" name="invia" value="Paga ORA">
	</form>

	
</body>
</html>