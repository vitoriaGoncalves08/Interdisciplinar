<?php
//AQUI ONDE FAZ PRA IR APARECENDO ENQUANTO ESCREVE 
require_once('../Class/Palavra.php');
if(isset($_GET['term'])){
    $termo = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);
    if($termo==null){
        echo json_encode(Palavra::getAllPalavras());
    }else{
        echo json_encode(Palavra::getPalavra($termo));
    }
}