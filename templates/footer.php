	<div id="carregar"></div>
	<script src="assets/js/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--script src="assets/js/bootstrap.min.js"></script-->
    <script src="assets/js/scripts/jquery.validacao.js"></script>
    <script src="assets/js/mask/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="assets/js/mask/jquery.maskMoney.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(function(){
	        $(".valor").maskMoney({
	            symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay:true
	        });
	    });
	</script>
</body>
</html>