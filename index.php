<?php 
	
	include 'db_connection.php'; 

	function taskclass($done_status){
		$resultado = $done_status ;
		if($done_status==0){
			$resultado = "task-notdone";
		}else{
			$resultado = "task-done";
		}
		return ($resultado);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Testes</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="main">
			<h1>To do</h1>		
			
			<ul>
				<?php $resultado = select("SELECT * FROM tasks",$db_connection); ?>
				<?php while($linhas = mysqli_fetch_row($resultado)) { ?>			
				<li>								
					<span class=<?php echo taskclass($linhas[2])?>>
						<form action="markasdone.php" method="POST">
							<input type='hidden' name="done" value=<?php echo $linhas[0];?>>
							<input type='submit' value="done!">											
						<?php echo wordwrap($linhas[1],20,'<br />',1); ?>
						</form>
					</span>						
				</li>		
				<?php } ?>				    	
			</ul>		
			<div id="btn_deletar">
				<form action="deletar.php" method="POST">
					<input type="submit" value="Deletar tarefas feitas">	
				</form>
			</div>
			<div id="form_add">
				<form action="adicionar.php" method="POST">
					<input type="text" name="item" required>
					<input type="submit" value="Adicionar">
				</form>
			</div>
		</div>
	</body>
</html>