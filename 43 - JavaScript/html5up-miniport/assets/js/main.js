// ---------- SELETORES ----------
// Exercicio 1
let h1 = document.getElementById("titular");
    h1.style.display = 'none';

// Exercicio 2

let coruja = document.querySelector("#lechuza");
    coruja.style.filter = "grayscale(100%)";

// Exercicio 3
let inpu = document.querySelectorAll("input, textarea");
    for (let i = 0; i <inpu.length; i++){
        inpu[i].style.background = 'red'
    }

// ---------- DOM - Seletores e Atributos ----------
// Exercicio 1
let cop = document.getElementById("copyright");
    cop.attributes;

// Exercicio 2
let tw = document.getElementsByClassName("icon fa-twitter");
    for (let i = 0; i <tw.length; i++){
        tw[i].getAttribute("href");
    }

// Exercicio 3
let face = document.getElementsByClassName("icon fa-facebookr");
    for (let i = 0; i <face.length; i++){
        face[i].getAttribute("href");
    }

// Exercicio 4
let yt = document.getElementsByClassName("icon fa-youtube");
    for (let i = 0; i <yt.length; i++){
        yt[i].setAttribute("href", "https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA");
    }

// Exercicio 5

// Exercicio 7
let h2 = document.getElementsByTagName("h2");
    for (let i = 0; i <h2.length; i++){
        h2[i].style.color = 'red'
    }

// Exercicio 8
let ic = document.getElementsByClassName("icon");
    for (let i = 0; i <ic.length; i++){
        ic[i].style.color = 'blue'
    }

// ---------- Elementos ----------
// Exercicios 1
let navT = document.getElementById("top");
let navW = document.getElementById("work");
let navP = document.getElementById("portfolio");
let navc = document.getElementById("contact");

    navT.textContent = "Topo";
    navW.textContent = "Trabalho";
    navP.textContent = "Portfolio";
    navc.textContent = "Contato";


    // aula dia 10
    // pegando os valores do input !

    function pegaDados(event){

        event.preventDefault();
        
        console.log(
            document.getElementById('name').value,
            document.getElementById('email').value,
            document.getElementById('subject').value,
            document.getElementById('message').value,
        );


    };


