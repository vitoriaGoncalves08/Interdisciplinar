<?php
header("Content-Type: application/json");
require_once('../Class/Palavra.php');
$id = json_decode(file_get_contents('php://input'))->id;
if(isset($id) && $id !== null && $id !== '')
{
    try {
        Palavra::deletarPalavra($id);
        echo "Palavra deletada com sucesso!";
    } catch (Throwable $th) {
        throw new Exception(" $th", 1);
    }
}