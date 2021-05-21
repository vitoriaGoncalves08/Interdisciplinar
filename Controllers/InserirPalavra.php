<?php
//pegar as variaveis do json mandado ou banco, cria classe insere.
require_once('../Class/Palavra.php');
$palavra = $_GET['palavra'];
$traducao = $_GET['traducao'];
$descricao = $_GET['descricao'];
try {
    $word = new Palavra($palavra, $traducao, $descricao);
    Palavra::setPalavra($word);
    echo "Palavra $palavra cadastrada com sucesso!";
} catch (Throwable $th) {
    throw new Exception("Error Processing Request $th", 1);
}