<?php 	
		require_once("../data/conexao.php");
		require_once("../data/functions.php");
		

		$tipo  = anti_injection($_REQUEST['tipo']);
		$email = anti_injection($_REQUEST['email']);
		$senha = md5($_REQUEST['senha']);


		switch ($tipo) {
			case 'login':
				

				 $query_user   = mysql_query("SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}' AND status = 1 ");
					
					$usuarioExist = mysql_num_rows( $query_user );

						if( $usuarioExist ) {
							$row_user = mysql_fetch_assoc($query_user);
							$_SESSION["login"]   = true;
							

							
							//$_SESSION['msg'] 		= 'Usuário ou senha invalidos';
							
							header("LOCATION: ../home.php");
							
							exit;

						} else {
							  $_SESSION['msg'] 		= 'Usuário ou senha invalidos';
							  $_SESSION["logged"] = true;
							  header("LOCATION: ../index.php");
						}




	
				break;
			
				default:
				echo 'teste';
				break;
		}


?>