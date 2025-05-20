<?php
$subRota = $caminho[1] ?? null; //Verifica se há algo na segunda rota
switch($subRota){
    case '':
        require './models/produto.php';
        $produto = new Produto;
        $dados = $produto->queryAll();
        require './views/produtos/consultaProdutos.php';
        break;

    case 'cadastro':
        require './models/produto.php';
        $produto = new Produto;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $parameters = [
                ':nomeProduto' => $_POST['nomeProduto'] ?? '',
                ':precoProduto' => $_POST['precoProduto'] ?? 0,
                ':estoqueProduto' => $_POST['estoqueProduto'] ?? 0
            ];
    
            $produto->cadastraProduto($parameters);
    
            header("Location: /mvc_php/produto");
            exit;
        }
    
        // Se for GET, só exibe o formulário
        require './views/produtos/cadastroProduto.php';
        break;
        

        default:
        if (preg_match('/^(\d+)\/excluir$/', $caminho[1] . '/' . ($caminho[2] ?? ''), $matches)) {
            // Excluir produto
            $idProduto = $matches[1];

            require './models/produto.php';
            $produto = new Produto;
            $resultado = $produto->excluiProduto([':idProduto' => $idProduto]);

            if ($resultado) {
                header("Location: /mvc_php/produto");
                exit;
            } else {
                echo "Erro ao excluir o produto.";
            }

        } elseif (preg_match('/^\d+$/', $caminho[1])) {
            // Visualizar produto
            $id = $caminho[1];

            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require './views/produtos/consultaProduto.php';

        } else {
            // rota não reconhecida
            echo "Página não encontrada.";
        }
        break;
}