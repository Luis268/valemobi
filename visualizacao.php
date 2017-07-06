<?php 
	// Conexão com o banco de dados
	require_once"conexao/conexao.php";
?>
<div class="row">
	<h4>Produtos Cadastrados</h4>
</div>

<div class="row">
	<table class="table table-responsive table-hover">
		<tr>
			<th>Código</th>
			<th>Tipo Mercadoria</th>
			<th>Nome</th>
			<th>Quantidade</th>
			<th>Preço</th>
			<th>Tipo Negócio</th>
		</tr>

	<?php 
		// Exibe as informações do banco de dados
		$sql = mysql_query("SELECT * FROM mercadorias");
		while($linha = mysql_fetch_array($sql)){
	?>
		<tr>
			<td><?php echo $linha['Codigo_Mercadoria']; ?></td>
			<td><?php echo $linha['Tipo_Mercadoria']; ?></td>
			<td><?php echo $linha['Nome_Mercadoria']; ?></td>
			<td><?php echo $linha['Quantidade']; ?></td>
			<td><b><?php echo "R$ " . number_format($linha['Preco'], 2, ',', '.'); ?></b></td>
			<td><?php echo $linha['Tipo_Negocio']; ?></td>
		</tr>
	<?php } ?>
	</table>		
</div>


