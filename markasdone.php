<?php
	include 'Db.php';
	$obj_db = new Db();

	$id = $_POST['done'];

	foreach ($obj_db->select("SELECT done FROM tasks WHERE id = '".$id."'") as $items) {
		if(is_null($items)){break;}
		$status = $items[0];
	}

	if($status[0]=='0'){
		echo 1;
		$obj_db->updatestatus(1,$id);
	}else{
		echo 0;
		$obj_db->updatestatus(0,$id);
	}
	
	header('Location: index.php');
?>

