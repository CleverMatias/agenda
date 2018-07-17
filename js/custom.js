$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#cidade').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#cidade" ).autocomplete({
    	minLength: 2,
    	source: function( request, response ) {
    		$.ajax({
    			url: "consulta.php",
    			dataType: "json",
    			data: {
    				acao: 'autocomplete',
    				parametro: $('#cidade').val()
    			},
    			success: function(data) {
    				response(data);
    			}
    		});
    	},
    	focus: function( event, ui ) {
    		$("#cidade").val( ui.item.nome );

    		return false;
    	},
    	select: function( event, ui ) {
    		$("#cidade").val( ui.item.nome );
    		carregarDados();
    		return false;
    	}
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
    	return $( "<li>" )
    	.append( "<a><b>"+ item.nome + "</b></a>" )
    	.appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var cidade = $('#cidade').val();

    	if(cidade != "" && cidade.length >= 2){
    		$.ajax({
    			url: "consulta.php",
    			dataType: "json",	
    			data: {
    				acao: 'consulta',
    				parametro: $('#cidade').val()
    			},
    			success: function( data ) {                  
                    if(data[0].cnome == 'Paranaguá'){
                        $("#menu1").append("<p>cleverson</p>");
                    }
                    len = $("#tecnico").val();
                    if (typeof(len) === "undefined"){len = 'a'}
                       len = len.length;
                   if(len >= 0){$(".tecnico").remove();}
                   for(i=0; i<data.length; i++){
                       $(".tb").append( 
                        "<tr class='tecnico'><td>"+ data[i].nome +"</td><td>"+ data[i].visitas +"</td><td style='color:red'>"+ data[i].observacao +"</td></tr>"
                        )}
                   }	       
               });
    	}
    }


    // Função para limpar os campos caso a cidade esteja vazia
    function limpaCampos(){
    	var cidade = $('#cidade').val();

    	if(cidade == ""){
    		$('#escolha').val('');

    	}
    }


});