# List to do

*	Como configurar:

	Os arquivos deveram ser postos em um servidor web.
	para executar o programa a maquina deverá conter php7 e mysql.
	um banco de dados deverá ser criado para a mesma, sendo este o do arquivo Banco-teknisa.sql

*	construir:

	Execute a query de banco passada no arquivo Banco-teknisa.sql no seu banco mysql.

*	executar:

	abra o seu navegador preferido na url: localhost/List-to-do/index.php
	para testar basta incluir algo no text box e apertar o botão adicionar.
	o botão 'done!' marca a tarefa como feita podendo ser assim exlcuido pelo botão 'Deletar tarefas feitas'.

* Detalhamento da estrutura e organização dos arquivos do projeto;

	Sobre a estrutura dos arquivos o index.php contem o html e a pagina principal do programa,
	adicionar.php e deletar.php são chamados para fazer as respctivas funções no banco. O arquivo markasdone.php
	faz a marcação de uma tarefa como feita e muda no banco o seu valor para poder ser excluida(se assim o usuario quiser). 
	Db.php faz a conexão com o banco de dados e todos os serviços que são relacionados ao db. A pagina servicos.php contem apenas
	uma classe com a função de mudar a classe css do span para fins visuais e de marcação do item já feito.

* [Opcional] Apresentar justificativas ou destaques para pontos específicos do projeto.

	O projeto em sua maioria foi desenvolvido com programação orientada a objeto 
	e não usa de linguagens terceiras como javascript ou jquery, a fins de mostrar
	o conhecimento em php.


