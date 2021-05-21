<?php
require_once('../Model/Conexao.php');
class Palavra
{
    private $palavra, $traducao, $descricao, $id; //variaveis

    public function __construct(string $palavra, string $traducao, string $descricao) // construtor setando dados
    {
        $this->palavra = $palavra;
        $this->traducao = $traducao;
        $this->descricao = $descricao;
    }

    public static function getPalavra($word) // pega pelo ID ou nome com LIKE
    {
        try {
            $dados = [];
            $pdo = Conexao::getConexao();
            $select = "SELECT * FROM tbPalavra WHERE nomePalavra LIKE '%$word%' ORDER BY nomePalavra ASC";
            $result_pesquisa = $pdo->prepare($select);
            $result_pesquisa->bindValue(1,$word);
            $result_pesquisa->execute();
            return json_encode($result_pesquisa->fetchAll());       
        } catch (Exception $th) {
            return json_encode($th->getMessage());
        }
    }
    public static function getAllPalavras() // pega todas as palavras
    {
        try {
            $dados = [];
            $pdo = Conexao::getConexao();
            $select = "SELECT nomePalavra FROM tbPalavra ORDER BY nomePalavra";
            $result_pesquisa = $pdo->prepare($select);
            $result_pesquisa->execute();
            $dados = json_encode($result_pesquisa->fetchAll());
            return $dados;        
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public static function setPalavra($word) // pega pelo ID ou nome com LIKE
    {
        try {
            $conn = Conexao::getConexao();
            $sql = 'INSERT INTO tbpalavra(nomePalavra,traducaoPalavra,descricaoPalavra) VALUES (?,?,?)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $word->palavra);
            $stmt->bindValue(2, $word->traducao);
            $stmt->bindValue(3, $word->descricao);
            $stmt->execute();
            return 'ok';
        } catch (Exception $th) {
            return $th;
        }
    }
}