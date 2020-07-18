<?php 


foreach($_POST["valore"] as $key => $val) {
	${$key} = $val;
} 

echo $val;


foreach($_POST as $key => $val) {
	if(is_array($val)) continue;
	${$key} = htmlentities($val);
}?>