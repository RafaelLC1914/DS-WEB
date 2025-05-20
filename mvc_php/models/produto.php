<?php

require './models/database.php';

class Produto{
    private $conexao;

    public function __construct(){
        $this->conexao = new Database;
    }

    public function queryOne($parameters){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos WHERE idProduto = :idProduto", $parameters);
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function queryAll(){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function cadastraProduto($parameters) {
        return $this->conexao->executeQuery(
            "INSERT INTO produtos (nomeProduto, precoProduto, estoqueProduto)
             VALUES (:nomeProduto, :precoProduto, :estoqueProduto)", // Corrigido aqui
            $parameters
        );
    }
    public function excluiProduto($parameters) {
        return $this->conexao->executeQuery(
            "DELETE FROM produtos WHERE idProduto = :idProduto",
            $parameters
        );
    }
    

}