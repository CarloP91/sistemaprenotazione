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

$sql = "SELECT * FROM assegnazioneposti";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>



   <?php 

   $id = $row["id"];


   if ($row["nome"] !="") {
    $nome = 'PRENOTATO A NOME: ' .$row["nome"];
  } else $nome = "";


  $posto = $row["posto"];

  echo " - Posto: " 
  . $posto 
  . " - Prezzo: " 
  .$row["prezzo"]
  ."€ "
  ?> 
  <span style="display: inline-block;" id="p1"></span>  

  <?php 
  if ($row["nome"] =="") {

    echo '<strong><span style="color: green;">POSTO DISPONIBILE</span></strong> - '; 
    echo '<a class="a_btn_book" href="../prenotazione.php">PRENOTA</a>';

  } else {
    echo '<strong><span style="color: red;">POSTO NON DISPONIBILE</span></strong> - ';
    echo '<a class="a_btn_del" href="admin_db/delete_data.php?id='.$id.'">CANCELLA</a>';
  };

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




