<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sterms</title>
        <link rel="stylesheet" href="./Public/assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">   
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">     
    </head>
    <body>

    <header id="header">
        <a id="logo" href="">STerms</a>
        <nav id="nav">
            <button id="btn-mobile">Menu
            <span id="hamburger"></span>
            </button>

            <ul id="menu">
                <li><a href="./Public/View/index_inserir.php">Insert</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header>

        <section class="cont-form">
        <form method="POST" action="">
            <input type="text" list="datas" name="termo" id="termo" placeholder="Search term">
            <datalist id="datas">
            </datalist>
            <button type="button" id="btn" name="PesqTermo"><i class="fas fa-search"></i></button
        </form>

        </section>

        <div id='content'>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">Vitória Passos</a></li>
                                <li><a href="#">Mariana Santos</a></li>
                                <li><a href="#">Guilherme Narciso</a></li>
                                <li><a href="#">Camylly Lima</a></li>
                                <li><a href="#">Gabriely Brito</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">returns</a></li>
                                <li><a href="#">order status</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <script src="./Public/assets/javascript/jquery.js"></script>
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
                console.log(res);
                let content = document.querySelector('#content');
                content.innerHTML = '';
                for (let i = 0; i < res.length; i++) {
                    content.innerHTML += 
                    `<div class="lista">
                        <p class="nomeP"><b>Nome:</b> ${res[i].nomePalavra}</p>
                        <p class="tradP"><b>Tradução:</b> ${res[i].traducaoPalavra}</p>
                        <p class="descP"><b>Descrição:</b> ${res[i].descricaoPalavra}</p>
                    </div>
                    `               ;
                    document.querySelector('#datas').innerHTML += `<option>${res[i].nomePalavra}</option>` 
                }
            })
        </script>

  </body>     
</html>
