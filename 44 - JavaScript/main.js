// Exercicio 2 
let cpm = document.getElementById("cpm");

function alerta(evt){
    alert("Olá");
}

cpm.addEventListener("click", alerta);

// Exercicio 3
let pintaB = document.getElementById("altFundo")

let pb = document.getElementsByTagName("body");

function pintaFundo(evt){
    for (let i = 0; i < pb.length; i++){
        pb[i].style.background = 'green'
    }
}

pintaB.addEventListener("click", pintaFundo);

// Exercicio 4

let imgP = document.getElementById("passaro");

function olhaPassaro(evt){
    console.log("Estou vendo a imagem");
}

imgP.addEventListener("onmouseover", olhaPassaro);

// Exercicio 5

let imgD = document.getElementById("dog");

function clickDog(evt){
    console.log("Estou clicando na imagem");
}

imgD.addEventListener("click", clickDog);

// Exercicio 6 -- ERRO POR QUE ELE DESABILITA O CODIGO DO BTN ALTERR FUNDO --

    // function mudaFundo(){
    //     this.document.body.style.background = 'red';
    // }

    // addEventListener("click", mudaFundo);

// Exercicio 7

