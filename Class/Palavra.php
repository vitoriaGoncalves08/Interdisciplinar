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
            $select = "SELECT * FROM tbPalavra WHERE nomePalavra LIKE ? ORDER BY nomePalavra ASC";
            $result_pesquisa = $pdo->prepare($select);
            $result_pesquisa->bindValue(1,"$word%");
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
            $select = "SELECT idPalavra, nomePalavra,traducaoPalavra,descricaoPalavra FROM tbPalavra ORDER BY nomePalavra";
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

    public static function deletarPalavra($id) 
    {
        try {
            $conn = Conexao::getConexao();
            $sql = 'DELETE FROM tbpalavra WHERE idPalavra = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return 'ok';
        } catch (Exception $th) {
            return $th;
        }
    }

    public static function atualizarPalavra($palavra)
    {
        try {
            $conn = Conexao::getConexao();
            $sql = 'UPDATE tbpalavra SET nomePalavra = ?, traducaoPalavra = ?, descricaoPalavra = ? WHERE idPalavra = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $palavra->nome);
            $stmt->bindValue(2, $palavra->traducaoPalavra);
            $stmt->bindValue(3, $palavra->descricao);
            $stmt->bindValue(4, $palavra->id);
            $stmt->execute();
            return 'ok';
        } catch (Exception $th) {
            return $th;
        }
    }


}