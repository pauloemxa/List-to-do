<?php
	include 'db_connection.php';
	
	insert($_POST['item'],0,$db_connection);
	
	header('Location: index.php');
?>

