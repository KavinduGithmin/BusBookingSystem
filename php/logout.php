<?php
	
	session_start();
	
	echo $_SESSION['usid'];

	session_destroy();
	Header("Location:home.php");

?>