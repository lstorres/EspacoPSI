         <footer>
            <hr>
             <p id="email"><i class="fas fa-envelope"></i>romildo.psi.santos@gmail.com</p>
                    <p id="telefone"><i class="fas fa-phone"></i>+55 021 3176-3838</p>           
                    <!-- <p id="instagram"><i class="fab fa-instagram"></i>Instagram</p>
                    <p id="facebook"><i class="fab fa-facebook-square"></i>Facebook</p> -->
        </footer>
    <script src="index.js" type="text/javascript"></script>
    <script src="navegacao.js" type="text/javascript"></script>
    <script src="principal.js" type="text/javascript"></script>
<script>
//          carrega as variáveis (incorpora os elementos HTML)
            var menu = document.querySelector("#menu");
            var nav = document.querySelector(".nav");
            var main = document.querySelector('.main');
            var mainContent = document.querySelector("#mainContent");
            var area = document.querySelector("#area"); 
            var marcarUmaConsulta = document.getElementById("marcarUmaConsulta");
            var titulo_mainContent = document.getElementById("titulo_mainContent");
            var btnHome = document.getElementById("btnHome");
            var btnQuemSomos = document.getElementById("btnQuemSomos");
            var btnCarreira = document.getElementById("btnCarreira");
            var btnMateriais = document.getElementById("btnMateriais");
            var btnContato = document.getElementById("btnContato");
            
//          Apresentação de slides
            array1 = new Array ('Imagens/1.jpg','Imagens/2.jpg','Imagens/3.jpg');
            var posicao;
            
            function comeco(){
            document.getElementById('imgId').src = array1[0];
            posicao=0;
            }

            function mais(){
            posicao = Math.floor (1+ 1 - 2 + (posicao) * 1 + 1);
            if (posicao > 2)
            {posicao = 0;}
            }

            function menos(){
            posicao = Math.floor (1+ 1 - 2 + (posicao) * 1 -1);
            if (posicao < 0)
            {posicao = 2;}
            }

            function regular(){
            document.getElementById('imgId').src = array1[posicao];
            setTimeout("regular()", 1);
            }
             
            comeco();
            regular();
            
//          Abertura do menu para mobile
            menu.addEventListener('click', function(e) {
            nav.classList.toggle('open');
            e.stopPropagation();
            });
            main.addEventListener('click', function(e){
            nav.classList.remove('open');
            });
              
//          Mudança de conteúdo da div main                         
            function texto(){
                console.log('teste');
            }
            function getTextoHome(){
                titulo_mainContent.innerHTML="Espaço PSI";
                mainContent.innerHTML = "<p id='textoHome'>O espaço PSI, é um consultório de psicologia e psicanálise criados pelos psicólos Raquel Souza e Romildo Santos. \n\
                O consultório fica localizado perto do metro da praça Saes Pena na tijuca , na galera 344 \n\
                \n\     na praça , trabalhamos de segunda a sábado, sendo o período diurno voltado para a terpia infantil com a psicóloga Raquel, e \n\
                o período noturno e aos sábados com o psicanalista Romildo.</p> ";
                marcarUmaConsulta.classList.remove('hide');
            }
            function getTextoContato(){
                titulo_mainContent.innerHTML="Entre em contato conosco:"
                mainContent.innerHTML = "<p>Encaminhe suas dúvidas e solicitações de consultas pelo formulário. </p>\n\
                <br>\n\
                <div id='area'>\n\
                    <form id='formulario' autocomplete='off'>\n\
                    <fieldset><legend>Formulário</legend>\n\
                    <label>Nome:</label><input class='campo_nome' type='text'>\n\
                    <br><label>Email:</label><input class='campo_email'type='password'>\n\
                    <br><label>Mensagem:</label><br><textarea class='msg' cols='35' rows='8'></textarea>\n\
                    <br><input class='btn_submit' type='submit' value='Enviar'>\n\
                    </fieldset></form>\n\
                </div>";
                marcarUmaConsulta.classList.toggle('hide');
            }
            
            btnHome.addEventListener('click', getTextoHome);
            btnQuemSomos.addEventListener('click', texto);
            btnCarreira.addEventListener('click', function(){
                mainContent.innerHTML = textoCarreira;
            });
            btnContato.addEventListener('click', getTextoContato);
            
//          Aqui na verdade será uma outra página, já que haverão vários materiais. 
            btnMateriais.addEventListener('click', function(){
                mainContent.innerHTML = textoMateriais;
            });
            
//          Exibe o formulário de contato que está no método getTextoContato
            marcarUmaConsulta.addEventListener('click', getTextoContato);
            
//          document.body.onload = métodoASerCarregado; > carrega o método junto com o body
            document.body.onload = getTextoHome();
        </script>
    </body>
</html>