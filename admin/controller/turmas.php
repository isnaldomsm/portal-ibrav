<?php 
	//Conexão BD
	require("../data/conexao.php");

	$tipo 			= $_REQUEST['tipo'];
	$nome 			= $_REQUEST['nome'];
	$cidade 		= $_REQUEST['cidade'];
	$ano 			= $_REQUEST['ano'];

	switch ($tipo) {
		case 'add':
				$insert 		= "INSERT INTO turmas (nome, ano, cidade) VALUES ('".$nome."', '".$ano."', '".$cidade."') ";
				$query			= mysql_query($insert);

				header('LOCATION: ../turma.php');

			break;
		
		default:
			# code...
			break;
	}
?>