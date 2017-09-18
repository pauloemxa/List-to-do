<?php 
	include 'Db.php';
	include 'Servicos.php';
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
				<?php $obj_db = new Db(); ?>
				<?php foreach($obj_db->selectdados() as $items){ ?>
				<?php if(is_null($items)){break;} ?>
				<li>
					<?php $obj_servicos = new Servicos(); ?>
					<span class=<?php $obj_servicos->taskclass($items[2])?> >
						<form action="markasdone.php" method="POST">							
							<input type='hidden' name="done" value=<?php echo $items[0] ?>>
							<input type='submit' value="done!">
							<?php echo $items[1];?>										
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