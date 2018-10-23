<?php
	session_start();
	$name = $_SESSION['name'];	
	echo "Welcome ".$_SESSION['name'];
?>