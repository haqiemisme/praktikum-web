<?php
if((eregi("[^a-zA-Z ]", $_POST['user'])) || (eregi("[^a-zA-Z ]", $_POST['password']))){
	echo "Anda mengakses data selain String!! You don't say!!";
}
else{
	echo "Halo " . $_POST['user'];
}
?>