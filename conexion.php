<?php 

try {
	$con = new mysqli ('localhost','root','','proyecto');

} catch (Exception $e) {
	echo "qhubo pues papi no da , que hacemos pues?  ".$e->getMessage();
}
?>