<?php
	/**
	* Este aquivo faz a inclusão de uma tarefa.
	*/
	include 'Db.php';	

	$obj_db = new Db();

	$obj_db->insertdata($_POST['item']);
	
	header('Location: index.php');
?>

