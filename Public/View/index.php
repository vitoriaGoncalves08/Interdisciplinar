<?php
// include_once '../../Model/Conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>dbInterdisciplinar</title>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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



        <?php
        // $PesqTermo = filter_input(INPUT_POST, 'PesqTermo', FILTER_SANITIZE_STRING);
        // if ($PesqTermo) {
        //     $termo = filter_input(INPUT_POST, 'termo', FILTER_SANITIZE_STRING);

        //     //SQL para selecionar os registros
        //     $select = "SELECT * FROM tbPalavra WHERE nomePalavra LIKE '%" . $termo . "%' ORDER BY nomePalavra ASC LIMIT 7";
        //     $result_pesquisa = $pdo->prepare($select);
        //     $result_pesquisa->execute();

        //     while ($row = $result_pesquisa->fetch(PDO::FETCH_ASSOC)) {
        //         echo "ID: " . $row['idPalavra'] . "<br>";
        //         echo "Nome: " . $row['nomePalavra'] . "<br>";
        //         echo "Tradução: " . $row['traducaoPalavra'] . "<br>";
        //         echo "Descrição: " . $row['descricaoPalavra'] . "<br><hr>";
        //     }
        // }
        ?>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

        <script>
            // $(function () {
            //     $("#termo").autocomplete({
            //         source: '../../Controllers/PegaPalavra.php'
            //     });
            // });

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
