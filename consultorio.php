<?php include ("header.php");?>
<link rel="stylesheet" type="text/css" href="CSS/consultorio.css">
<div class="consultorio-wrapper">
    <div class="imagens grid-col-2">
      <h3>O espaço</h3>
      <img id="imagemConsultorio" alt=""/>
      </br>
      <a id="btnAnterior" href="javascript:menos()"><img src="imagens/arrow.png"></a>
      <a id="btnProximo" href="javascript:mais()"><img src="imagens/arrow.png"></a>
    </div>
    <div class="localizacao grid-col-2">
        <h3>Localização</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.726831433354!2d-43.23402198503399!3d-22.92344438500333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDU1JzI0LjQiUyA0M8KwMTMnNTQuNiJX!5e0!3m2!1spt-BR!2sbr!4v1535498139214" allowfullscreen></iframe>
        <p id="endereco">Rua Conde de Bonfim, 344 - bloco 2 sala 602 - Tijuca, Rio de Janeiro - RJ, 20520-054</p>
    </div>
</div>
<?php include("footer.php");?>
<script>      
    //          Apresentação de slides
    console.log("consultorio");
    array1 = new Array ('imagens/1.jpeg','imagens/2.jpeg','imagens/3.jpeg');
    var posicao;

    function comeco(){
        document.getElementById('imagemConsultorio').src = array1[0];
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
        document.getElementById('imagemConsultorio').src = array1[posicao];
        setTimeout("regular()", 1);
    }

    comeco();
    regular();
</script>       