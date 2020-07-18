<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcinema";

$order= "nome"; 
$visual= "ASC"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `assegnazioneposti` WHERE stato = 'DISPONIBILE' or stato = 'SELEZIONATO'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>



					<?php 

					$id = $row["id"];


					if ($row["nome"] !="") {
						$nome = '<strong><span style="color: orange">PRENOTATO</span></strong> A NOME: ' .$row["nome"];
					} else $nome = "";


					$posto = $row["posto"];
      				  echo " - Posto: " 
      				  . $posto 
      				  . " Prezzo: " 
      				  .$row["prezzo"]
      				  ."€ "
      			?> <span style="display: inline-block;" id="p1"></span>  

      			<?php 
      				if ($row["nome"] =="") { ?>

      						<?php echo '<strong><span style="color: green;">POSTO DISPONIBILE</span></strong>' ?>
      						
      						<form method="post" action="db/insert.php">
      							<input type="text" name="nome" placeholder="inserisci nome" required>
      							<input type="text" name="cognome" placeholder="inserisci nome" required>
      							<input type="hidden" name="posto" value="<?php echo $posto?>" >
      							<input type="submit" name="invia">
      						</form>

<?php 
      				} else {
      				echo $nome ." " .$row["cognome"]; ?> <a href="db/delete_data.php?id=<?php echo $id ?>" >X</a>
<?php       			}
      			


 ?>     		

      			


<br><br>

<?php 

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<hr>




