<?php
	include ('inc/header.php');
?>
		


		<!--
		</div> end: Container  -->	

		<!-- start: Container -->	
		<div class="container">

			<!-- start: Contact Form -->
			<div class="span4">
				<div class="title"><h2>Atendimento</h2></div>
				<br>

				<!-- start: Contact Form -->
				<div id="contact-form">
					
					<form method="post" action="###">
						
						<fieldset>
							<div class="clearfix">
								<label for="nome-fantasia"><span>Nome Fantasia:</span></label>
								<div class="input">
									<input tabindex="1" size="18" id="name" name="name" type="text" value="">
								</div>
							</div>



							<div class="clearfix">
								<label for="email"><span>Email:</span></label>
								<div class="input">
									<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
								</div>
							</div>


							<div class="clearfix">
								<label for="cnpj"><span>CNPJ:</span></label>
								<div class="input">
									<input tabindex="2" size="25" id="cpf" name="cpf" type="text" value="" class="input-xlarge">
								</div>
							</div>

								<div class="clearfix">
								<label for="contato"><span>Contato</span></label>
								<div class="input">
									<input tabindex="2" size="8" id="telefoneCliente" name="telefoneCliente" type="number" value="" class="input-xlarge">	
								</div>
							</div>
							
							<label for="categoria"><span>Categoria</span></label>
							<select id = categoria>
								  <option value="x">X</option>
								  <option value="y">Y</option>
								  <option value="x">Z</option>
							</select>

							<div>
								<p>Se nao houver categoria, preencher o campo abaixo e clique em adicionar opção </p>
								<input type="text" name="novacategoria" id ="novacategoria">

								<button type="button" onclick="myFunction()">Adicionar Opção</button>

								
								<script>
								function myFunction() {
									var nova = document.getElementById("novacategoria").value; 
								    var x = document.getElementById("categoria");
								    var option = document.createElement("option");
								    option.text =  nova;
								    x.add(option);
								}
								</script>
							</div>

							</body>
							</html>


							<div class="actions">

								<a href="index.php" class="btn btn-succes btn-large">Voltar</a>

								<button tabindex="3" type="submit" class="btn btn-succes btn-large">Cadastrar</button>
								
							</div>
						</fieldset>
					

						</fieldset>
					</form>
					
				</div>
				<!-- end: Contact Form -->



<?php
	include ('inc/footer.php');
?>
		
