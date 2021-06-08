<?php
header("Content-Type: application/json");
require_once('../Class/Palavra.php');
$get = json_decode(file_get_contents('php://input'));

if($get != null || $get!= "" || !isset($get))
{
    // var_dump($get->palavra);
    try {
        Palavra::atualizarPalavra($get->palavra); 
        echo "Palavra atualizada com sucesso!";
    } catch (Throwable $th) {
        throw new Exception("Erro ao atualizar palavra {$th->getMessage() }", 1);
    }
}