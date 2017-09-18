<?php
	include 'db_connection.php';

	$id = $_POST['done'];

	$resultado = select("SELECT done FROM tasks WHERE id = '".$id."'",$db_connection);
	
	$status = mysqli_fetch_row($resultado);
	
	if($status[0]=='0'){
		update(1,$id,$db_connection);
	}else{
		update(0,$id,$db_connection);
	}
	
	header('Location: index.php');
?>

