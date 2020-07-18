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

$sql = "SELECT * FROM `assegnazioneposti` WHERE stato = 'SELEZIONATO'";
$array1 = array();
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { 

$array1 = array_merge($array1, array_map('trim', explode(",", $row['id'])));



          $id = $row["id"];

				  echo '<span style="border: solid 1px"> BIGLIETTO: ' ."<strong>Posto:</strong> " .$row["posto"] ." <strong>Nome:</strong> " .$row["nome"] ." <strong>Cognome:</strong> " .$row["cognome"] ." <strong>Prezzo:</strong> " .$row["prezzo"] ." €" .'</span>'; 
          ?>




      			
<br>



<?php 

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


<hr>

  <?php  

  return $array1;

// foreach ($array1 as $value) {
//   echo " " .$value;
// }

?>