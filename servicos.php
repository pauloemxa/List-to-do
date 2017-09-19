<?php 
/**
* Está classe trará serviços que podem ser chamados na aplicação
*/
class Servicos extends Db
{
	//Muda o nome do span com fins de mudar a classe css.
	public function taskClass($done_status){
		if($done_status==0){
			echo "task-notdone";
		}else{
			echo "task-done";
		}
	}
	//Insere o item digitado no banco
	public function insertDataIndex()
	{
		Db::insertData($_POST['item']);	
	}
	//Chama a função para deletar os items marcados.
	public function deleteDataIndex()
	{
		Db::deleteMarcados();
	}
	//Marca um item como feito
	public function markAsDone($id)
	{
		foreach (Db::selectQuery($id) as $items) {
			if(is_null($items)){break;}
			$status = $items[0];
		}

		if($status[0]=='0')
		{
			Db::updateStatus(1,$id);
		}else{
			Db::updateStatus(0,$id);
		}
	}
}

?>