<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sterms</title>

        <link rel="stylesheet" href="./Public/assets/css/style.css"/>
        <script src="./Public/assets/javascript/jquery.js"></script>
    </head>
    <body>

    <header id="header">
        <a id="logo" href="">STerms</a>
        <nav id="nav">
            <button class="btn-mobile">Menu</button>
            <ul id="menu">
                <li><a href="./Public/View/index_inserir.php">Insert</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>

        <form method="POST" action="">
            <input type="text" list="datas" name="termo" id="termo"  placeholder="Search term">
            <datalist id="datas">
            </datalist>
            <input type="button" id="btn" name="PesqTermo" value="Search">
            
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>
