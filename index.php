<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>dbInterdisciplinar</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>Assunto: </label>
            <input type="text" list="datas" name="termo" id="termo"  placeholder="Pesquisar termo">
            <datalist id="datas">
            </datalist>
            <input type="button" id="btn" name="PesqTermo" value="Pesquisar">
            <a href="./Public/View/index_inserir.php">Inserir</a>
        </form><br><br>
        <div id='content'>
        </div>
        <script>
            'use strict';
            let termo = document.querySelector('#termo');
            let values = document.querySelector('#datas');
            let req = fetch(`./Controllers/PegaPalavra.php`);
            req.then(el=>{
                el.json().then(el=>{
                    for (let i = 0; i < el.length; i++) {
                    content.innerHTML += 
                    `<p>Nome: ${el[i].nomePalavra}</p>
                    <p>Traducao: ${el[i].traducaoPalavra}</p>
                    <p>Descricao: ${el[i].descricaoPalavra}</p>
                    <hr>
                    `               ;
                    document.querySelector('#datas').innerHTML += `<option>${el[i].nomePalavra}</option>` 
                }
                })
            })
            termo.addEventListener('change',async(evt)=>{
                evt.preventDefault();
                let req = await fetch(`./Controllers/PegaPalavra.php?term=${termo.value}`);
                let res = JSON.parse(await req.json());
                let content = document.querySelector('#content');
                content.innerHTML = '';
                for (let i = 0; i < res.length; i++) {
                    content.innerHTML += 
                    `<p>Nome: ${res[i].nomePalavra}</p>
                    <p>Traducao: ${res[i].traducaoPalavra}</p>
                    <p>Descricao: ${res[i].descricaoPalavra}</p>
                    <hr>
                    `               ;
                    document.querySelector('#datas').innerHTML += `<option>${res[i].nomePalavra}</option>` 
                }
            })
        </script>
    </body>
</html>
