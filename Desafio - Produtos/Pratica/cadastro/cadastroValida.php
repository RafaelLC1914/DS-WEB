<?php
session_start();
include_once('..\conexao.php');

// Verifica se o usuário está logado corretamente
if (!isset($_SESSION['login']) || !isset($_SESSION['email'])) {
    header("Location: ..\login.php");
    exit();
}

/// Verifica se o cargo do usuário logado é "chefe" ou "gerente"
if ($_SESSION['cargo'] !== "chefe" && $_SESSION['cargo'] !== "gerente") {
    echo "<script>alert('Acesso negado! Apenas usuários com cargo de Chefe ou Gerente podem acessar esta página.'); window.location.href = '../index.php';</script>";
    exit();
}


// Inicializa as variáveis de erro
$erroNome = $erroCargo = $erroEmail = $erroSenha = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

// Função de validação do cadastro
function validarDadosCadastro($nome, $cargo, $email, $senha) {
    global $erroNome, $erroCargo, $erroEmail, $erroSenha;

    // Validando nome
    if (empty($nome)) {
        $erroNome = "O nome é obrigatório.";
    } else {
        $nome = limpaEntrada($nome);
        if (strlen($nome) < 2) {
            $erroNome = "O nome precisa ter pelo menos 2 caracteres.";
        }
    }

    // Validando Cargo
    $cargosPermitidos = ["administrador", "gerente", "chefe"];
    if (empty($cargo)) { 
        $erroCargo = "O cargo é obrigatório.";
    } else {
        $cargo = limpaEntrada($cargo);
        if (!in_array($cargo, $cargosPermitidos)) {
            $erroCargo = "Cargo inválido. Escolha um dos cargos permitidos.";
        }
    }

    // Validando email
    if (empty($email)) { 
        $erroEmail = "O email é obrigatório.";
    } else {
        $email = limpaEntrada($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de email inválido.";
        }
    }

    // Validando senha
    if (empty($senha)) {
        $erroSenha = "A senha é obrigatória.";
    } else {
        $senha = limpaEntrada($senha);
        if (strlen($senha) < 8) {
            $erroSenha = "A senha precisa ter pelo menos 8 caracteres.";
        }
    }

    // Armazena os erros na sessão
    $_SESSION['erroNome'] = $erroNome;
    $_SESSION['erroCargo'] = $erroCargo;
    $_SESSION['erroEmail'] = $erroEmail;
    $_SESSION['erroSenha'] = $erroSenha;

    // Armazena os valores preenchidos para não perder os dados no formulário
    $_SESSION['valorNome'] = $nome;
    $_SESSION['valorCargo'] = $cargo;
    $_SESSION['valorEmail'] = $email;
    $_SESSION['valorSenha'] = $senha;

    // Retorna false se houver erro
    return empty($erroNome) && empty($erroCargo) && empty($erroEmail) && empty($erroSenha);
}
?>
