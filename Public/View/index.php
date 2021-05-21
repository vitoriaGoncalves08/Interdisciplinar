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
        </form><br><br>
        <div id='content'>
        </div>
        <script>
            'use strict';
            let termo = document.querySelector('#termo');
            termo.addEventListener('change',async(evt)=>{
                evt.preventDefault();
                let req = await fetch(`../../Controllers/PegaPalavra.php?term=${termo.value}`);
                let res = JSON.parse(await req.json());
                let content = document.querySelector('#content');
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
