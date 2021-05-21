<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Interdiciplinar</title>
</head>

<body>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        display: flex;
        width: 50%;
        padding: 30px;
        background-color: #CCC;
        flex-direction: column;
    }

    form input {
        padding: 10px;
        font-size: 1.2em;
        margin: 10px 0;
    }

    input[type='submit'] {
        cursor: pointer;
        background-color: rgb(120, 120, 120);
    }
    
    </style>
    <form action="./Controllers/InserirPalavra.php" id='form' method="POST">
        <input type="text" placeholder="Palavra" id="palavra" required>
        <input type="text" placeholder="Traducao" id="traducao" required>
        <input type="text" placeholder="Descricao" id="descricao" required>
        <input type="submit" value="Inserir">
    </form>

</body>
<script>
    let form = document.querySelector('#form');
    let palavra = document.querySelector('#palavra');
    let traducao = document.querySelector('#traducao');
    let descricao = document.querySelector('#descricao');
    form.addEventListener('submit', (evt)=>{
        evt.preventDefault();
        async function Go(){
            let req = await fetch(`./Controllers/InserirPalavra.php?
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
</html>