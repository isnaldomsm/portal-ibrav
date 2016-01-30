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

				if($query){
						$_SESSION['msg'] 		= 'Dados cadastrados com sucesso!';	
				}else {
						$_SESSION['msg'] 		= 'Erro no cadastro, tente novamente!';
				}

				header('LOCATION: ../turmas-list.php');

			break;
		case'edt':
				$id 		= $_REQUEST['id'];

	 			$update 	= "UPDATE turmas SET nome='".$nome."', cidade='".$cidade."', ano = '".$ano."' WHERE id = '".$id."' ";
				$query 		= mysql_query($update);

				if($query){
						$_SESSION['msg'] 		= 'Dados cadastrados com sucesso!';	
				}else {
						$_SESSION['msg'] 		= 'Erro no cadastro, tente novamente!';
				}

				header('LOCATION: ../turmas-list.php');



		break;
		
		default:
			# code...
			break;
	}
?>