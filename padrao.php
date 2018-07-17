<?php include_once 'template/header.php' ?>
<?php

session_start();
?>
<input id="protocolo" type="hidden"  name="" value="<?= $_SESSION['protocolo'] ?>">
<input id="nome" type="hidden"  name="" value="<?= $_SESSION['nome'] ?>">
<input id="telefone" type="hidden"  name="" value="<?= $_SESSION['telefone'] ?>">
<input id="problema" type="hidden"  name="" value="<?= $_SESSION['problema'] ?>">
<input id="tecnologia" type="hidden"  name="" value="<?= $_SESSION['tecnologia'] ?>">
<!-- Imagem -->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="margin-top:; display: flex; justify-content: center;" >
		<img src="img/procedimentos.jpg" class="img-responsive">
	</div>
</div>


<link rel="stylesheet" type="text/css" href="css/custom.css">


<!-- ver teste_crud.php -->

<div class="row">
	<div class="col-md-6 col-md-offset-3" style="margin-top:2rem; display: flex; justify-content: flex-start;" >

		<button class="btn btn-info"><a style="text-decoration: none; color: inherit; " href='<?php echo $url; ?>procedimentos.php?session=clean&protocolo_voltar=<?php echo $_SESSION['protocolo'] ?>&nome_voltar=<?php echo $_SESSION['nome'] ?>&telefone_voltar=<?php echo $_SESSION['telefone'] ?>&problema_voltar=<?php echo $_SESSION['problema'] ?>'>Voltar</a></button>

		

		<button id="copyBlock" style="margin-left: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit; margin-left:">Registrar</a></button>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="form-group">
			<label style="margin-top: 15px; color: grey;" for="comment">Resumo<span> <strong style="color: red;">Padrão</strong></span></label>
			<textarea class="form-control resumo" rows="8" id="comment">
			</textarea>
		</div>
	</div>
</div>
<div id="answer"></div>

<script type="text/javascript">
	window.scrollTo(0,document.body.scrollHeight);
	$(document).ready(function(){
		var val = $('#resumo').val();
		var protocolo = $('#protocolo').val();
		var nome = $('#nome').val();
		var telefone = $('#telefone').val();
		var problema = $('#problema').val();
		var tecnologia = $('#tecnologia').val();

		
       
                                    
		
							// Preenche os campos básicos
							$('#comment').val('Protocolo: '+protocolo+'\nNome: '+nome+'\nTelefone: '+telefone+'\nTecnologia: \n Problema: '+problema+'\n\nProcedimentos: ');
						});
	// variáveis
	var textarea = document.getElementById("comment");
	var answer = document.getElementById("copyAnswer");
	var copy   = document.getElementById("copyBlock");
	copy.addEventListener('click', function(e) {

		textarea.select();

		try {

	       // Copiar o texto para o clipboard!
	       var successful = document.execCommand('copy');

	       if(successful) answer.innerHTML = 'Copiado!';
	       else answer.innerHTML = 'Não foi possível copiar!';
	   } catch (err) {
	   	answer.innerHTML = 'Navegador sem suporte!';
	   }
	});
</script>              


<?php include_once 'template/footer.php' ?>