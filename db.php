<?php

/**
* Está classe fará a conexão com o banco
* e todos os serviços no mesmo.
*/
class Db
{	
	private $hostname;
	private $username;
	private $password;
	private $db_name;	
	//String de conexão com o banco
	private $db_connection;
	
	function __construct()
	{
		$this->hostname = 'LOCALHOST';
		$this->username = 'root';
		$this->password = '';
		$this->db_name = 'todo_teknisa';	
		//String de conexão com o banco
		$this->db_connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->db_name);
	}

	//Faz o select passado no banco e retorna o resultado de cada linha no array $resultado
	function selectDados()
	{
		$select = mysqli_query($this->db_connection,"SELECT * FROM tasks");
		$i=0;
		while ($resultado[$i] = mysqli_fetch_row($select))
		{		
			$i++;
		}
		return($resultado);
    }
    //Faz qualquer select passado como parametro.
    function selectQuery($id)
    {
    	$query = "SELECT done FROM tasks WHERE id = '".$id."'";
		$select = mysqli_query($this->db_connection,$query);
		$i=0;
		while ($resultado[$i] = mysqli_fetch_row($select))
		{		
			$i++;
		}
		return($resultado);
    }
    //Deleta todos os items "marcados".
	function deleteMarcados()
	{
		$query = "DELETE FROM tasks WHERE done = '1'";
		mysqli_query($this->db_connection,$query);
	}
	//Muda o status do item para marcado/não marcado.
	function updateStatus($done ,$id)
	{
		$query = "UPDATE tasks SET done='".$done."' WHERE id='".$id."'";
		mysqli_query($this->db_connection,$query);
	}
	//Insere os dados no banco
	function insertData($task_description)
	{												
		$query = "INSERT INTO tasks(description,done) VALUES('".$task_description."','0')";
		mysqli_query($this->db_connection,$query);
	}
}

?>
