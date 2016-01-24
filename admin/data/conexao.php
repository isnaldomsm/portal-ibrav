<?php 
	session_start();
	ini_set('display_errors', 0 );
	error_reporting(0);
	
//	session_start();
	
	$db_host  = 'localhost';
	$db_user  = 'root';
	$db_pass  = '';
	$database = 'ibrav';

	// efetua conexao com o mysql e seleciona o banco de dados
	@mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
	@mysql_select_db($database) or die(mysql_error());
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

	header ('Content-type: text/html; charset=UTF-8');
