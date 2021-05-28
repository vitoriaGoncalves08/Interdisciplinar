<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Projeto Interdiciplinar</title>
</head>

<body>
    <header id="header">
        <a id="logo" href="">STerms</a>
        <nav id="nav">
            <button id="btn-mobile">Menu
            <span id="hamburger"></span>
            </button>

            <ul id="menu">
                <li><a href="#">Insert</a></li>
                <li><a href="../../index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <br>
    <style>
    .box{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
    }

    form {
        display: flex;
        width: 100%;
        max-width: 60vh;
        padding: 1rem;
        background-color: #CCC;
        flex-direction: column;
        border-radius: 7px;
        font-family: 'Arial'
    }

    form input {
        padding: 10px;
        font-size: max(1em,1.1vw);
        margin: 10px 0;
        border-radius: 7px;
        border: none;
        font-family: 'Arial';
        outline: 0;
    }

    input[type='submit'] {
        cursor: pointer;
        background-color: #24262b;
        color: white;
    }
     h1{
        font-size: max(18px,1.7vw);
        text-align: center;
        border-bottom:3px solid #9400D3;
        margin-bottom: 10px;
    }
    
    </style>

    <div class="box">
        <form action="./Controllers/InserirPalavra.php" id='form' method="POST">
        <h1>Insert a new term</h1>

        <input type="text" placeholder="Term" id="palavra" required>
        <input type="text" placeholder="Translation" id="traducao" required>
        <input type="text" placeholder="Description" id="descricao" required>
        <input type="submit" value="Insert">
        </form>
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
            <h4>components</h4>
                    <ul>
                        <li><a href="#">PWIII</a></li>
                        <li><a href="#">English</a></li>
                        <li><a href="#">PAMII</a></li>
                        <li><a href="#">Banco</a></li>
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


    <script>
        let form = document.querySelector('#form');
        let palavra = document.querySelector('#palavra');
        let traducao = document.querySelector('#traducao');
        let descricao = document.querySelector('#descricao');
        form.addEventListener('submit', (evt)=>{
            evt.preventDefault();
            async function Go(){
                let req = await fetch(`../../Controllers/InserirPalavra.php?
                palavra=${palavra.value}&traducao=${traducao.value}&descricao=${descricao.value}`)
                let res = await req.text();
                alert(res);
            }
            Go();
            palavra.value = '';
            traducao.value = '';
            descricao.value = '';
    
    })
    </script>
        <script src="../assets/javascript/jquery.js"></script>

</body>
</html>