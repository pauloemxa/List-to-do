<?php 
	include 'Db.php';
	include 'Servicos.php';
	$objServicos = new Servicos();
	//Determina se a variavel $_POST será usada ou não e se for qual função chamar.
	if(isset($_POST['item']))
	{
		$objServicos->insertDataIndex();
	}
	elseif(isset($_POST['deletar']))
	{
		$objServicos->deleteDataIndex();
	}
	elseif(isset($_POST['done']))
	{
		$objServicos->markAsDone($_POST['done']);
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
				<?php $obj_db = new Db(); ?>
				<?php foreach($obj_db->selectDados() as $items){ ?>
				<?php if(is_null($items)){break;} ?>
				<li>
					<?php $obj_servicos = new Servicos(); ?>
					<span class=<?php $obj_servicos->taskClass($items[2])?> >
						<form action="index.php" method="POST">							
							<input type='hidden' name="done" value=<?php echo $items[0] ?>>
							<input type='submit' value="done!">
							<?php echo wordwrap($items[1],20,'<br />',1); ?>
						</form>
					</span>						
				</li>		
				<?php } ?>				    	
			</ul>		
			<div id="btn_deletar">
				<form action="index.php" method="POST">
					<input type="hidden" name="deletar" value="deletar">
					<input type="submit" value="Deletar tarefas feitas">	
				</form>
			</div>
			<div id="form_add">
				<form action="index.php" method="POST">
					<input type="text" name="item" required>
					<input type="submit" value="Adicionar">
				</form>
			</div>
		</div>
	</body>
</html>