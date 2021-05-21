<?php
    class Conexao{
        public static function getConexao(){
            $servidor = "localhost";
            $banco = "dbInterdiciplinar";
            $usuario = "root";
            $senha = "";
            try{
                $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
                return $pdo;
            }catch(Exception $e){   
                throw new Exception("Error: $e", 1);
            }
        }
    }
?>