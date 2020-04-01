/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

console.log("navegacao.js");

//          Abertura do menu para mobile
menu.addEventListener('click', function (e) {
    nav.classList.toggle('open');
    e.stopPropagation();
});
nav.addEventListener('click', function (e) {
    nav.classList.remove('open');
});


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