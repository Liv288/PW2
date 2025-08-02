<?php
	$servidor="localhost";
	$banco="dbComercio";
	$usuario="root"; /* usuário do banco de dados */
	$senha=""; /* senha do usuário do banco de dados */

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>