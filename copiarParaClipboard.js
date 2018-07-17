// variáveis
var textarea = document.getElementById("textarea");
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