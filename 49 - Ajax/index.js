// Botão exibir botões
document.querySelector('#exibir-noticias').onClick = carregarArticles();

function carregarArticles() {

    // URL da API
    var url = 'https://newsapi.org/v2/top-headlines?' +
        'country=us&' +
        'apiKey=1fa53484baf74c318438d2a5d36ceb95';


    var req = new Request(url);
    let container = document.getElementById('noticias');
    fetch(req)
        //THEN: Espera o fetch ser resolvido e 
        //executa a função passada por parametro
        .then(function (response) {
            // JSON é um PROMISE assim como o retorno do FETC
            //Data: Resultado da consulta da API em Array
            response.json().then(function (data) {
                //Usar o innerHTML para renderizar na pagina
                data.articles.forEach(function (article) {
                    container.innerHTML += `
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">${article.title}</h3>
                            </div>
                            <div class="card-body">
                                <img class="offset-4" src="${article.urlToImage}" width="200" height="200">
                                <p>${article.description}</p>
                            </div>
                            <div class="card-footer">
                                <a href="${article.url}" class="btn btn-primary">Ver noticia</a>
                            </div>
                        </div>
                    </div>
                    `
                })
            })
        });
}