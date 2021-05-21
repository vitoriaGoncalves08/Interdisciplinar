<?php
include_once '../../Model/Conexao.php';
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
            <input type="text" name="termo" id="termo" placeholder="Pesquisar termo">

            <input type="submit" name="PesqTermo" value="Pesquisar">
        </form><br><br>
        <?php
        $PesqTermo = filter_input(INPUT_POST, 'PesqTermo', FILTER_SANITIZE_STRING);
        if ($PesqTermo) {
            $termo = filter_input(INPUT_POST, 'termo', FILTER_SANITIZE_STRING);

            //SQL para selecionar os registros
            $select = "SELECT * FROM tbPalavra WHERE nomePalavra LIKE '%" . $termo . "%' ORDER BY nomePalavra ASC LIMIT 7";
            $result_pesquisa = $pdo->prepare($select);
            $result_pesquisa->execute();

            while ($row = $result_pesquisa->fetch(PDO::FETCH_ASSOC)) {
                echo "ID: " . $row['idPalavra'] . "<br>";
                echo "Nome: " . $row['nomePalavra'] . "<br>";
                echo "Tradução: " . $row['traducaoPalavra'] . "<br>";
                echo "Descrição: " . $row['descricaoPalavra'] . "<br><hr>";
            }
        }
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script>
            $(function () {
                $("#termo").autocomplete({
                    source: '../../Controllers/PegaPalavra.php'
                });
            });
        </script>
    </body>
</html>
