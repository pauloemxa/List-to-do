<?php
	include 'db_connection.php';

	delete($db_connection);

	header('Location: index.php');
?>

