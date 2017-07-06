<?php
	// Inclusão do header 
	require_once"templates/header.php"; 
?>
<div class="container">
	<div class="row">
		<h2>Cadastro de Informações</h2>
		<hr />
	</div>

	<div class="row">

	<form method="POST" id="formCadastro" name="formCadastro">
		<div class="col-lg-1">			
			<div class="from-group">
				<label class="label label-danger">Código *</label>
				<input type="text" id="Codigo_Mercadoria" name="Codigo_Mercadoria" value="" class="form-control" />
			</div>
		</div>

		<div class="col-lg-2">			
			<div class="from-group">
				<label class="label label-danger">Tipo Mercadoria *</label>
				<input type="text" id="Tipo_Mercadoria" name="Tipo_Mercadoria" value="" class="form-control" />
			</div>
		</div>

		<div class="col-lg-3">			
			<div class="from-group">
				<label class="label label-danger">Nome *</label>
				<input type="text" id="Nome_Mercadoria" name="Nome_Mercadoria" value="" class="form-control" />
			</div>
		</div>

		<div class="col-lg-2">			
			<div class="from-group">
				<label class="label label-danger">Qtde *</label>
				<input type="text" id="Quantidade" name="Quantidade" value="" class="form-control" />
			</div>							
		</div>

		<div class="col-lg-2">			
			<div class="from-group">
				<label class="label label-danger">Preço *</label>
				<input type="text" id="Preco" name="Preco" value="" class="form-control valor" />
			</div>
		</div>

		<div class="col-lg-2">			
			<div class="from-group">
				<label class="label label-danger">Tipo (Compra/Venda) *</label>
				<select name="Tipo_Negocio" id="Tipo_Negocio" class="form-control">
					<option value="n">---SELECIONE</option>
					<option value="Compra">Compra</option>
					<option value="Venda">Venda</option>
				</select>
			</div>
		</div>

		<div class="col-lg-12">&nbsp;</div>

		<div class="col-lg-12">
			<div class="from-group">
				<a href="javascript:void(0);" onclick="return cadastro();" id="btnAcao" class="btn btn-primary">Cadastrar</a>
			</div>
		</div>

	</form>
	</div>
	<div class="row">&nbsp;</div>
	<div class="resp"></div>
</div>
<?php 
	// Inclusão do footer
	require_once"templates/footer.php"; 
?>