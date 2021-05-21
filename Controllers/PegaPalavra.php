<?php
//AQUI ONDE FAZ PRA IR APARECENDO ENQUANTO ESCREVE 
include_once '../Model/Conexao.php';

$termo = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$select = "SELECT nomePalavra FROM tbPalavra WHERE nomePalavra LIKE '%" . $termo . "%' ORDER BY nomePalavra ASC LIMIT 7";

//Seleciona os registros
$result_pesquisa = $pdo->prepare($select);
$result_pesquisa->execute();

while($row = $result_pesquisa->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row['termo'];
}

echo json_encode($data);