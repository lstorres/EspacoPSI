//   carrega as variáveis (incorpora os elementos HTML)
console.log("principal.js");
//          Mudança de conteúdo da div main    

//btnCriarPublicacao.addEventListener('click', function criarPublicacao (){
//    
//
//});

function getTextoHome() {
   
    main.classList.remove('hide');
    marcarUmaConsulta.classList.remove('hide');
    div_Imagens.classList.toggle('hide');
    div_localizacao.classList.toggle('hide');
    
    titulo_mainContent.innerHTML = "Espaço PSI";
    mainContent.innerHTML = "<p id='textoHome'>O espaço PSI, é um consultório de psicologia e psicanálise criados pelos psicólos Raquel Soares e Romildo Santos. \n\
                O consultório fica localizado perto do metro da praça Saes Pena na tijuca , na galera 344 \n\
                \n\     na praça , trabalhamos de segunda a sábado, sendo o período diurno voltado para a terpia infantil com a psicóloga Raquel, e \n\
                o período noturno e aos sábados com o psicanalista Romildo.</p> ";
}
function getTextoContato() {
    main.classList.remove('hide');
    marcarUmaConsulta.classList.toggle('hide');
    div_Imagens.classList.toggle('hide');
    div_localizacao.classList.toggle('hide');
    
    titulo_mainContent.innerHTML = "Entre em contato conosco:";
    mainContent.innerHTML = "<p>Encaminhe suas dúvidas e solicitações de consultas pelo formulário. </p>\n\
                <br>\n\
                <div id='area'>\n\
                    <form id='formulario' autocomplete='off'>\n\
                    <fieldset><legend>Formulário</legend>\n\
                    <p><label>Nome:</label><input class='campo_nome' type='text'></p>\n\
                    <br><p><label>Email:</label><input class='campo_email'type='password'></p>\n\
                    <br><p><label>Mensagem:</label></p>\n\
                    \n\<br><textarea class='msg' cols='35' rows='8'></textarea>\n\
                    <br><input class='btn_submit' type='submit' value='Enviar'>\n\
                    </fieldset></form>\n\
                </div>";
    
}
function getTextoConsultorio(e){
    main.classList.toggle('hide');
    div_localizacao.classList.remove('hide');
    div_Imagens.classList.remove('hide');
    e.stopPropagation();
}
//          Atribui o EventListener aos botões do menu
btnHome.addEventListener('click', getTextoHome);
btnConsultorio.addEventListener('click', getTextoConsultorio);
btnContato.addEventListener('click', getTextoContato);

//          Aqui na verdade será uma outra página, já que haverão vários materiais. 
btnPublicacoes.addEventListener('click', function (){});

//          Exibe o formulário de contato que está no método getTextoContato
//marcarUmaConsulta.addEventListener('click', getTextoContato);

//          document.body.onload = métodoASerCarregado; > carrega o método junto com o body
//document.body.onload = getTextoHome();