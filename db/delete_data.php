<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcinema";


//$id = $_POST['id'];
$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `testcinema`.`assegnazioneposti` SET `nome` = NULL, `cognome` = NULL, `stato` = 'DISPONIBILE' WHERE (`id` = '$id');";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
 // header( "refresh:0;url=../index.php" );
	header("Location: ../prenotazione.php");

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>