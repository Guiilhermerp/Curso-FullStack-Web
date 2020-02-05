var numeros = [ 10,	15,	18,	23,	50,	100, 321, 1, 0 ];

// 1. Obtenha um novo array a partir do array numeros, com todos os items multiplicados por 3 e retone o resultado no console. 

let multiplica = numeros.map(function(numero){
    return numero * 3;
});

console.log("Exercicio 1: ", multiplica);

// 2. crie um novo array com os todos os itens menores que 50 e retone o resultado no console.

let menor50 = numeros.filter(function(numero){
    return result =  numero < 50;
});

console.log("Exercicio 2: ", menor50);

// 3.1 retorne no console todos os itens pares do array.

console.log("Exercicio 3.1: ", numeros.filter(item => item % 2 === 0));

// 3.2 retorne no console todos os itens impares do array.

console.log("Exercicio 3.2: ", numeros.filter(item => item % 2 === 1));

// 4. utilizando o map retorne um novo array que fique da seguinte forma:
// [
// 	"numero: 10",
// 	"numero: 15",
// 	"numero: 18",
// 	"numero: 23",
// 	"numero: 50",
// 	"numero: 100",
// 	"numero: 321",
// 	"numero: 1",
// 	"numero: 0"
// ]


let numeroString = numeros.map(item => "numero: " + item);
    console.log("Exercicio 4: " , numeroString);