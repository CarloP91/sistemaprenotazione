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

<!-- 	<a href="#">POSTO 1</a> <span style="display: inline-block;" id="p1"></span>  <button onclick="this.style.visibility='hidden'; fp1();">PRENOTA</button> <br>
	<a href="#">POSTO 2</a> <span style="display: inline-block;" id="p2"></span>  <button id="bp2" onclick="fp2();">PRENOTA</button> <br>
	<a href="#">POSTO 3</a> <br>
	<a href="#">POSTO 4</a> <br>

  <span id="prezzo"></span> -->

  <?php  

//include our file and assign its return value to a variable
  $sumprezzo = include 'db/select_prenotazione.php';
  $sumprezzo = include 'db/select_sum.php';

//print it out

  ?> 

<form action="verifica.php">
    <input type="submit" value="CONFERMA" />
</form>
  
<!-- <script>
function fp1() {

  document.getElementById("p1").innerHTML = 
  '<input type="text" name="nome" placeholder="Inserisci il tuo Nome" id="nome">' 
  + '<input type="text" name="cognome" placeholder="Inserisci il tuo Cognome" id="cognome">'  
  + " " 
  +'<button id="invia" onclick="invia()" class="btn">INVIA</button>';

}

function fp2() {

  document.getElementById("p2").innerHTML = '<input type="text" name="nome" placeholder="Inserisci il tuo Nome" id="nome">' + '<input type="text" name="cognome" placeholder="Inserisci il tuo Cognome" id="cognome">'  + '<span id="prezzo"></span>' + " " + "€" + " " +'<button id="invia2" onclick="invia()" class="btn">INVIA</button>';

  	document.getElementById("bp2").style.visibility='hidden'; 
}
</script>

<script type="text/javascript">function invia()
 {
    var nome = document.getElementById('nome').value;
    var cognome = document.getElementById('cognome').value;
    
   {
      $.ajax({
          type: 'POST',
          url: "insert.php",
          data: {"cognome": cognome, "nome":nome, "prezzo":prezzo, "posto":posto},
          success: function(data){
            console.log(nome);
          },

          error: function(data) {
            console.log("Dati non inviati");
          }
      });
    }
    document.getElementById("nome").style.visibility='hidden'; 
    document.getElementById("cognome").style.visibility='hidden';
    document.getElementById("invia").style.visibility='hidden'; 


  };
</script>

<script type="text/javascript">
  document.getElementById("prezzo").innerHTML = prezzo;
</script> -->

</html>