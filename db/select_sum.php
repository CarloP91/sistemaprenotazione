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

$sql = "SELECT SUM(prezzo) FROM testcinema.assegnazioneposti WHERE stato = 'SELEZIONATO'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { 

 $sumprezzo = $row["SUM(prezzo)"];

 if ($sumprezzo != 0) {
 	echo '<div style="text-align: right;">' ."TOTALE BIGLIETTI PRENOTATI " .$sumprezzo ." €" ."</div>";
 } else 
   echo '<div style="text-align: right;">' ."TOTALE BIGLIETTI PRENOTATI " ."0" ." €" ."</div>";




    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>