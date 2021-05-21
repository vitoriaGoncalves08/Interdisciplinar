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

    public static function getPalavra(int $id = -1, string $word = '') // pega pelo ID ou nome com LIKE
    {
        try {
            // rotina de select com LIKE %%
            $dados = [];
            return $dados;
            // json_encode([
            //     'status'=>'ok',
            // assim que cria JSON em php, ai da pra colocar object antes da variavel que recebe para pegar os dados melhor.
            // ]);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
    public static function getAllPalavras() // pega todas as palavras
    {
        try {
            // rotina de select * from tbPalavra
            $dados = [];
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