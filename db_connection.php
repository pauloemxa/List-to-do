<?php
	
	//Informações do banco
	$hostname = 'LOCALHOST';
	$username = 'root';
	$password = '';
	$db_name = 'todo_teknisa';	
	
	//String de conexão com o banco
	$db_connection = mysqli_connect($hostname,$username,$password,$db_name);
	$query = '';

	//Faz o insert de tarefas no banco
	function insert($task_description, $task_status, $db_connection){												
		$query = "INSERT INTO tasks(description, done) VALUES('".$task_description."','".$task_status."')";
		mysqli_query($db_connection,$query);
	}
	
	//Faz a retirada de uma tarefa do banco
	function delete($db_connection){
		$query = "DELETE FROM tasks WHERE done = '1'";
		mysqli_query($db_connection,$query);
	}
	//Faz a atualização dos items a fazer
	function select($query_string,$db_connection){
		$query = $query_string;
		$resultado = mysqli_query($db_connection,$query);//Armazena o select na variavel $resultado
		return $resultado;
    }
    //Altera um item a fazer
	function update($done ,$id, $db_connection){
		$query = "UPDATE tasks SET done='".$done."' WHERE id='".$id."'";
		mysqli_query($db_connection,$query);
	}
?>