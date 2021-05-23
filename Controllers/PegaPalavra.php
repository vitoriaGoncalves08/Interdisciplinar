<?php
//AQUI ONDE FAZ PRA IR APARECENDO ENQUANTO ESCREVE 
require_once('../Class/Palavra.php');
if(isset($_GET['term'])){
    $termo = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
    echo json_encode(Palavra::getPalavra($termo));
}else
    echo Palavra::getAllPalavras();