<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcinema";

$array1 = include 'select_verifica.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


foreach ($array1 as $value) {

  $sql = "UPDATE `testcinema`.`assegnazioneposti` SET `stato` = 'PRENOTATO' WHERE (`id` = '$value');";

 


if ($conn->query($sql) === TRUE) {
    
  header( "refresh:5;url=../sala.php" );
 // header("Location: ../sala1.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

echo "Pagamento andato a buon fine";
?>