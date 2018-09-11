//   carrega as variáveis (incorpora os elementos HTML)
console.log("JS carregado");

var menu = document.querySelector('#menu');
var nav = document.querySelector(".nav");
var main = document.querySelector(".main");
var mainContent = document.querySelector("#mainContent");
var area = document.querySelector("#area");
var marcarUmaConsulta = document.getElementById("marcarUmaConsulta");
var titulo_mainContent = document.getElementById("titulo_mainContent");
var btnHome = document.getElementById("btnHome");
var btnQuemSomos = document.getElementById("btnQuemSomos");
var btnConsultorio = document.getElementById("btnConsultorio");
var btnPublicacoes = document.getElementById("btnPublicacoes");
var btnContato = document.getElementById("btnContato");
var div_Imagens = document.querySelector(".div_Imagens");
var imgId = document.getElementById("imgId");
var div_localizacao = document.querySelector(".div_localizacao");


//          Abertura do menu para mobile
menu.addEventListener('click', function (e) {
    nav.classList.toggle('open');
    e.stopPropagation();
});
nav.addEventListener('click', function (e) {
    nav.classList.remove('open');
});

//          Mudança de conteúdo da div main                         
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

//          Apresentação de slides
var array1 = new Array('Imagens/1.jpeg', 'Imagens/2.jpeg', 'Imagens/3.jpeg', 'Imagens/4.jpeg', 'Imagens/5.jpeg', 'Imagens/6.jpeg');
var posicao = 0;

function comeco() {
    imgId.src = array1[posicao];
    console.log("comeo executado");
}

function mais() {
    posicao++;
    if (posicao > 5)
    {
        posicao = 0;
    }
    imgId.src = array1[posicao];
    console.log(posicao);
}

function menos() {
    posicao--;
    if (posicao < 0)
    {
        posicao = 5;
    }
    imgId.src = array1[posicao];
    console.log(posicao);
}

//            function regular(){
//            imgId.src = array1[posicao];
//            setTimeout("regular()", 1);
//            }

document.body.onload = comeco();

//          document.body.onload = métodoASerCarregado; > carrega o método junto com o body
//document.body.onload = getTextoHome();