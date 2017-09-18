<?php
	include 'Db.php';
	$obj_db = new Db();

	$obj_db->deletemarcados();

	header('Location: index.php');
?>

