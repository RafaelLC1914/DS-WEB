<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

?>
<?php
//Inicializa as variáveis de erro
$erroNome = $erroEstoque = $erroPreco = $erroCodigo = "";

//Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   //Remove espaços extras
    $dado = stripslashes($dado); //Remove barras invertidas
    $dado = htmlspecialchars($dado); // onverte caracteres especiais
    return $dado;
}
session_start();

function validaProduto($codigo, $nome, $estoque, $preco) {
    $erroNome = $erroPreco = $erroEstoque = $erroCodigo = "";

    // Validando nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 2) {
            $erroNome = "O campo precisa possuir no mínimo 2 caracteres";
        }
    }

    // Validando preço
    if ($preco === "" || $preco === null) { // Verifica se está vazio
        $erroPreco = "O preço é obrigatório";
    } else {
        $preco = limpaEntrada($preco);
        $preco = floatval($preco); // Converte para número
        if ($preco <= 0) {
            $erroPreco = "O preço não pode ser negativo";
        }
    }

    // Validando estoque
    if ($estoque === "" || $estoque === null) { 
        $erroEstoque = "O estoque é obrigatório";
    } else {
        $estoque = limpaEntrada($estoque);
        $estoque = intval($estoque); // Converte para número inteiro
        if ($estoque < 0) {
            $erroEstoque = "O estoque não pode ser negativo";
        }
    }

    // Validando código
    if (empty($codigo)) {
        $erroCodigo = "O código é obrigatório -";
    } else {
        $codigo = limpaEntrada($codigo);
        if (strlen($codigo) < 12 || strlen($codigo) > 15) {
            $erroCodigo = "O código precisa ter entre 12 e 15 dígitos";
        }
    }

    // Armazena os erros e os valores na sessão para manter os campos preenchidos corretamente
    $_SESSION['erroNome'] = $erroNome;
    $_SESSION['erroPreco'] = $erroPreco;
    $_SESSION['erroEstoque'] = $erroEstoque;
    $_SESSION['erroCodigo'] = $erroCodigo;

    $_SESSION['valorNome'] = $nome;
    $_SESSION['valorPreco'] = $preco;
    $_SESSION['valorEstoque'] = $estoque;
    $_SESSION['valorCodigo'] = $codigo;

    // Retorna false se houver algum erro
    if (!empty($erroNome) || !empty($erroPreco) || !empty($erroEstoque) || !empty($erroCodigo)) {
        return false;
    }

    return true;
}
?>
