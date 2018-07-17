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
<?php include_once 'teste_crud.php' ?>

<div class="row">
	<div class="col-md-6 col-md-offset-3" style="margin-top:2rem; display: flex; justify-content: flex-start;" >

		<button class="btn btn-info"><a style="text-decoration: none; color: inherit; " href='<?php echo $url; ?>procedimentos.php?session=clean&protocolo_voltar=<?php echo $_SESSION['protocolo'] ?>&nome_voltar=<?php echo $_SESSION['nome'] ?>&telefone_voltar=<?php echo $_SESSION['telefone'] ?>&problema_voltar=<?php echo $_SESSION['problema'] ?>'>Voltar</a></button>

		<button style="margin-left: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit;" href='<?php echo $url; ?>teste_crud.php?valor=limpar&val=1&tabela=<?php echo $_SESSION['num_tabela'] ?>' >limpar</a></button>

		

		<button id="copyBlock" style="margin-left: 10px;" class="btn btn-info"><a style="text-decoration: none; color: inherit; margin-left:">Registrar</a></button>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="form-group">
			<label style="margin-top: 15px; color: grey;" for="comment">Resumo</label>
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

		if(tecnologia == 'predio'){

			if(val == '131112171921'){val = '\nNão conectado ISP\nRede isolada\nCriado discador PPPoE\nReconectado roteador\nNão navega\nRoteador N. Fibra\nO.S para N2 ou filial'}
				if(val == '131112171920'){val = '\nNão conectado ISP\nRede isolada\nCriado discador PPPoE\nReconectado roteador\nNão navega\nRoteador Particular\nOrientado a procurar técnico para o roteador'}
					if(val == '1311121718'){val = '\nNão conectado ISP\nRede isolada\nCriado discador PPPoE\nReconectado roteador\nSolucionado'}
						if(val == '13111416'){val = '\nNão conectado ISP\nNão tem computador para isolar a rede\nNão aceita retornar\nAberta O.S N2'}
							if(val == '13111415'){val = '\nNão conectado ISP\nNão tem computador para isolar a rede\nCliente irá retornar com computador cabeado'}
								if(val == '13111213'){val = '\nNão conectado ISP\nRede isolada\nCriado discador\nNão solucionado\nErro: '}
									if(val == '1346810'){val = '\nConectado ISP\nReiniciado rede Wi-fi\nNão navega\nIsolada rede\nNavega c/ rede isolada\nOrientado a procurar técnico para roteador particular '}
										if(val == '134689'){val = '\nConectado ISP\nReiniciado rede Wi-fi\nNão navega\nIsolada rede\nNão navega\nO.S aberta para N2 ou filial\nErro: '}
											if(val == '13467'){val = '\nConectado ISP\nReiniciado rede Wi-fi\nNão navega\nRoteador da N.Fibra\nO.S aberta para N2 ou filial'}
												if(val == '1345'){val = '\nConectado ISP\nReiniciado rede Wi-fi\nSolucionado'}
													if(val == '12'){val = '\nProblema na região orientado a aguardar.'}
						}

		// Controle dos procedimentos realizados para rádio.
		if(tecnologia == 'radio'){
    
			if(val == '1345'){val = '\nNão conectado ISP\nVerificada ordem dos cabos\nReiniciado POE\nNão Solucionado\n\nAgendado com: '+nome+'\nPeriodo: \nData: '}
				if(val == '12'){val = '\nProblema na região orientado a aguardar.'}
					if(val == '1368'){val = '\nVerificada ordem dos cabos\nReiniciado POE\nSolucionado'}
						if(val == '13691112'){val = '\nVerificada ordem dos cabos\nReiniciado POE\nReiniciado Wi-fi\nSolucionado'}
							if(val == '136911131416'){val = '\nVerificada ordem dos cabos\nReiniciado POE\nReiniciada rede Wi-fi\nRoteador do cliente\nOrientado a procurar técnico particular\nSolucionado'}
								if(val == '1369111317'){val = '\nVerificada ordem dos cabos\nReiniciado POE\nReiniciada rede Wi-fi\nRoteado da N. Fibra\nAberta ordem para tratamento N2'}
									if(val == '13691023'){val = '\nVerificada ordem dos cabos\nReiniciado POE\nRede isolada\nSolucionado'}
                                        if(val == '13691020'){val = '\nConectado ISP\nVerificada ordem de cabos\nPOE reiniciado\nRede isolada\nlimpeza de cache e config. DNS\nNão Solucionado\n\nAgendado com: '+nome+'\nPeriodo: \nData: '}
								            if(val == '1347'){val = '\nNão conectado ISP\nReiniciado POE\nSolucionado'}
                                }
        // Controle dos procedimentos realizados para lentidão.
        if(tecnologia == 'lentidao'){
    		tecnologia = '';
			
			if(val == '12'){val = '\nSolucionado. Problemas na região'}
				if(val == '135713151719'){val = '\nConectado ISP\nRede isolada\nVelocidade normal via cabo\nRoteador Wi-fi da N. Fibra\nTeste de Velocidade Wi-fi muito abaixo do normal\nO.S N2 ou filial roteador N. Fibra fora do padrão'}
					if(val == '135713151718'){val = '\nConectado ISP\nRede isolada\nVelocidade normal via cabo\nRoteador Wi-fi da N. Fibra\nTeste de Velocidade Wi-fi normal\nSolucionado'}
						if(val == '1357131516'){val = '\nConectado ISP\nRede isolada\nVelocidade normal via cabo\nRoteador Wi-fi do cliente\nSolucionado, orientado a procurar técnico particular para configuração de rede Wi-fi'}
							if(val == '13571314'){val = '\nConectado ISP\nRede isolada\nVelocidade abaixo do padrão via cabo\nO.S para N2 ou filial'}
								if(val == '13578912'){val = '\nConectado ISP\nImpossível isolar rede\nTeste de Velocidade via Wi-fi\nVelocidade dentro do padrão\nCliente não aceita argumentação\nO.S aberta para N2 ou filial'}
									if(val == '1357811'){val = '\nConectado ISP\nImpossível isolar rede\nTeste de Velocidade via Wi-fi\nMuito abaixo do normal no microtik\nO.S para N2 ou filial'}
										if(val == '13578910'){val = '\nConectado ISP\nImpossível isolar rede\nTeste de Velocidade via Wi-fi\nVelocidade Normal microtik\nOrientado a retornar com computador cabeado\nSolucionado'}
											if(val == '1356'){val = '\nConectado ISP\nExtrato de conexão com número alto de quedas\nAberta O.S N2 ou filial'}
												if(val == '134'){val = '\nSEGUIR FLUXO DE DESCONEXÃO!!!'}
					
                                }
                                    
		// Controle fluxo de fibra
		if(tecnologia == 'fibra'){

			// Controle dos procedimentos realizados para rádio.
			if(val == '1341517'){val = '\nConectado ISP\nReiniciado ONU\nReiniciada rede Wi-fi\n Abrir ordem para N2 ou filial\nNúmero de série da ONU:'}
				if(val == '12'){val = '\nProblema na região orientado a aguardar.'}
					if(val == '1341516'){val = '\nConectado ISP\nReiniciado ONU\nReiniciada rede Wi-fi\nSolucionado'}
						if(val == '131214'){val = '\nNão conectado ISP\nReiniciado ONU\nSolucionado'}
							if(val == '131213'){val = '\nNão conectado ISP\nReiniciado ONU\nNão Solucionado\nAbrir O.S para N2 ou filial\nNúmero de série ONU: '}
								if(val == '13457911'){val = '\nConectado ISP\nRede isolada\nReiniciado rede Wi-fi\nRoteado particular\nOrientado a procurar técnido particular\nSolucionado'}
									if(val == '13457910'){val = '\nConectado ISP\nRede isolada\nreinicidada rede Wi-fi\nNão solucionado\nRoteador da N.Fibra\nAberta O.S para N2 ou filial'}
										if(val == '134578'){val = '\nConectado ISP\nRede isolada\nreinicidada rede Wi-fi\nSolucionado'}
											if(val == '13456'){val = '\nConectado ISP\nRede isolada\nNão solucionado\nAberta O.S para N2 ou filial\nNúmero de série ONU: '}
										}
							// Preenche os campos básicos
							$('#comment').val('Protocolo: '+protocolo+'\nNome: '+nome+'\nTelefone: '+telefone+'\nTecnologia '+tecnologia+'\n Problema: '+problema+'\n\nProcedimentos: ' + val);
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