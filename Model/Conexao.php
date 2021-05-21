<?php
class Conexao
{
    public static function getConexao()
    {
        try {
            $host = 'mysql:host=localhost;dbname=dbinterdiciplinar';
            $username = 'root';
            $password = '';
            $options = '';
            $pdo = new PDO($host, $username, $password);
            if ($pdo) {
                return $pdo;
            } else {
                throw new Exception("Erro criando banco de dados", 1);
            }
        } catch (Exception $th) {
            throw new Exception("Erro criando banco de dados: $th", 1);
        }
    }
}