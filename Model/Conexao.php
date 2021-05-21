<?php
    $servidor = "localhost";
    $banco = "dbInterdiciplinar";
    $usuario = "root";
    $senha = "";
    
    try{
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    }catch(Exception $e){   
        echo $e->getMessage();
    }
?>