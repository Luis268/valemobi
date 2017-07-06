<?php

// Inclusão da conexão ao banco de dados
include"../conexao/conexao.php";

/*========================================================
	Base de Inserção de informações no banco de dados
========================================================*/

	$codigo 			= $_POST['codigo'];
	$tipoMercadoria 	= $_POST['tipo'];
	$nome 				= $_POST['nome'];
	$qtd 				= $_POST['qtde'];
	$pre 				= $_POST['preco'];
	$pr 				= str_replace(',','.', str_replace('.','',$pre));
	$tipoCompraVenda 	= $_POST['tipoN'];

	$sql = mysql_query("
		INSERT INTO 
			mercadorias 
		(
			idMercadoria, 
			Codigo_Mercadoria, 
			Tipo_Mercadoria, 
			Nome_Mercadoria, 
			Quantidade, 
			Preco, 
			Tipo_Negocio
		) 
		VALUES 
		(
			null, 
			'$codigo', 
			'$tipoMercadoria', 
			'$nome', 
			'$qtd', 
			'$pr', 
			'$tipoCompraVenda'
		)
		");

?>