/*============================
	VALIDAÇÕES DE DADOS
------------------------------
	* CÓDIGO
	* TIPO DA MERCADORIA
	* NOME DA MERCADORIA
	* QUANTIDADE DE MERCADORIA
	* PREÇO DA MERCADORIA
	* TIPO DO NEGÓCIO
============================*/
function cadastro(){
	c = formCadastro;

	// Verifica se o campo Código está vazio.
	if(c.Codigo_Mercadoria.value === ""){
		alert("Informe o CÓDIGO da Mercadoria.");
		c.Codigo_Mercadoria.style.backgroundColor="#FDF5E6";
		c.Codigo_Mercadoria.style.color="#f00";
		c.Codigo_Mercadoria.focus();
		return false;
	}

	// Verifica se o campo Código foi informado um número.
	if(isNaN(c.Codigo_Mercadoria.value)){
		alert("No campo CÓDIGO, informe apenas Número.");
		c.Codigo_Mercadoria.style.backgroundColor="#FDF5E6";
		c.Codigo_Mercadoria.style.color="#f00";
		c.Codigo_Mercadoria.focus();
		return false;
	}

	//Verifica se o campo Tipo da Mercadoria está vazio.
	if(c.Tipo_Mercadoria.value === ""){
		alert("Informe o TIPO da Mercadoria.");
		c.Tipo_Mercadoria.style.backgroundColor="#FDF5E6";
		c.Tipo_Mercadoria.style.color="#f00";
		c.Tipo_Mercadoria.focus();
		return false;
	}

	// Verifica se o campo Nome da Mercadoria está vazio.
	if(c.Nome_Mercadoria.value === ""){
		alert("Informe o NOME da Mercadoria.");
		c.Nome_Mercadoria.style.backgroundColor="#FDF5E6";
	    c.Nome_Mercadoria.style.color="#f00";
	    c.Nome_Mercadoria.focus();
	    return false;
	}

	// Verifica se o campo quantidade está vazio.
	if(c.Quantidade.value === ""){
		alert("Informe a QUANTIDADE da Mercadoria.");
		c.Quantidade.style.backgroundColor="#FDF5E6";
		c.Quantidade.style.color="#f00";
		c.Quantidade.focus();
		return false;
	}

	// Verifica se o campo quantidade é um número.
	if(isNaN(c.Quantidade.value)){
		alert("No campo QUANTIDADE, informe apenas Número.");
		c.Quantidade.style.backgroundColor="#FDF5E6";
		c.Quantidade.style.color="#f00";
		c.Quantidade.focus();
		return false;
	}

	// Verifica se o campo Preço está vazio ou igual a 0,00.
	if(c.Preco.value === "0,00" || c.Preco.value === ""){
		alert("Informe o PREÇO da Mercadoria.");
		c.Preco.style.backgroundColor="#FDF5E6";
		c.Preco.style.color="#f00";
		c.Preco.focus();
		return false;
	}

	// Verifica se o campo Tipo de Negócio é neutro (n).
	if(c.Tipo_Negocio.value === "n"){
		alert("Selecione o TIPO DO NEGÓCIO (COMPRA OU VENDA).");
		c.Tipo_Negocio.style.backgroundColor="#FDF5E6";
		c.Tipo_Negocio.style.color="#f00";
		c.Tipo_Negocio.focus();
		return false;

	}else{

		// Salva as informações no banco de dados
		var _url = "funcoes/acoes.php";
		var _tipo = "POST";
		var _tipo2 = "html";
		var endereco = "visualizacao.php";

		$.ajax({
			url: _url,
			type: _tipo,
			dataType: _tipo2,
			data: {
				codigo:c.Codigo_Mercadoria.value, 
				tipo:c.Tipo_Mercadoria.value, 
				nome:c.Nome_Mercadoria.value, 
				qtde:c.Quantidade.value, 
				preco:c.Preco.value, 
				tipoN:c.Tipo_Negocio.value
			},
			error: function(){
				$("#carregar").html('<span class="alert alert-danger">Não foi possível efetuar o cadastro.</span>');
			},
			success: function(){				
				alert("Cadastro Efetuado com sucesso!.");
				c.Codigo_Mercadoria.value = "";
				c.Tipo_Mercadoria.value = "";
				c.Nome_Mercadoria.value = "";
				c.Quantidade.value = "";
				c.Preco.value = "";
				c.Tipo_Negocio.value = "n";
			}
		});

		// Exibe as informações do banco de dados na página principal após o envio do cadastro
		$.ajax({
			url: 'visualizacao.php',
			type: 'POST',
			success: function(data){
				$(".resp").html(data);
			}
		});
		//document.formCadastro.submit();		
	}
	
}