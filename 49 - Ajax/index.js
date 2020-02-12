    // URL da API
    var url = 'https://newsapi.org/v2/top-headlines?' +
        'country=us&' +
        'apiKey=1fa53484baf74c318438d2a5d36ceb95';


    var req = new Request(url);
    fetch(req)
        //THEN: Espera o fetch ser resolvido e 
        //executa a função passada por parametro
        .then(function (response) {
            // JSON é um PROMISE assim como o retorno do FETC
            //Data: Resultado da consulta da API em Array
            console.log(response.json());

            let data = [ /** ... **/ ];

            //Usar o innerHTML para renderizar na pagina
            data.forEach(function(Article){

            })
        }