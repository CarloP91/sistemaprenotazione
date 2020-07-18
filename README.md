# Sistema Prenotazione / Booking System
# Created and developed by: Carlo Pennetta.
# Suggest to use it whit implementation of $_[SESSION]
For try it, create a localhost db with following conditions:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testcinema";

table name= assegnazioneposti

field:
id - nome - cognome - prezzo - posto - stato

The stato's field can change in: DISPONIBILE - PRENOTATO - SELEZIONATO (trad: available - booked - selected).
