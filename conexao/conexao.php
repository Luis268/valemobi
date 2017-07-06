<?php

$servidor 	= "localhost";
$usuario 	= "root";
$senha 		= "123";
$banco 		= "base_DB";

$conn = mysql_connect($servidor, $usuario, $senha);
$link = mysql_select_db($banco, $conn);

if(!$link){
	echo "<div class=\"container\"><div class=\"row\"><div class=\"col-lg-12 alert alert-danger text-center\">Verifique a configuração da conexão ao banco de dados!</div></div></div>";
}

?>