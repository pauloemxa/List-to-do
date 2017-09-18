<?php 
/**
* Está classe trará serviços que podem ser chamados na aplicação
*/
class Servicos
{
	//Muda o nome do span com fins de mudar a classe css.
	function taskclass($done_status){
		if($done_status==0){
			echo "task-notdone";
		}else{
			echo "task-done";
		}
	}
}

?>