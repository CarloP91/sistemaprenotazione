<!DOCTYPE html>
<html>
<head>
	<title>TEST ZONE</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>



	<H3>CINEMA SIMULATOR</H3>

	<script type="text/javascript">
		var	prezzo = Number(6.50).toFixed(2);
	</script>
  <?php  

//include our file and assign its return value to a variable
  $sumprezzo = include 'db/select_prenotazione.php';
  $sumprezzo = include 'db/select_sum.php';

//print it out

  ?> 

  <form action="verifica.php">
    <input type="submit" value="CONFERMA" />
  </form>

  <a href="index.php">HOMEPAGE</a>
  
  </html>