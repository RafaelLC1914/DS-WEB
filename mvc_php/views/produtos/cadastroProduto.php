<div> 
    <form id="formProduto" action="cadastro" method="post" enctype="multipart/form-data" onsubmit="return validarDadosProduto()">
        <label>Nome do Produto:</label>
        <input type="text" name="nomeProduto" id="nomeProduto">
        <div id="erro-nome" style="color:red;"></div>
        <br>

        <label>Preço:</label>
        <input type="number" name="precoProduto" id="precoProduto" step="0.01">
        <div id="erro-preco" style="color:red;"></div>
        <br>

        <label>Estoque:</label>
        <input type="number" name="estoqueProduto" id="estoqueProduto">
        <div id="erro-estoque" style="color:red;"></div>
        <br>
    
        <input type="submit" value="Enviar">
    </form>
</div>

<script>
function validarDadosProduto() {
    // pegar o formulário
    let form = document.getElementById('formProduto');

    // pegar inputs
    let nome = document.getElementById('nomeProduto');
    let preco = document.getElementById('precoProduto');
    let estoque = document.getElementById('estoqueProduto');

    // pegar elementos de erro
    let erroNome = document.getElementById('erro-nome');
    let erroPreco = document.getElementById('erro-preco');
    let erroEstoque = document.getElementById('erro-estoque');

    // resetar mensagens de erro
    erroNome.textContent = "";
    erroPreco.textContent = "";
    erroEstoque.textContent = "";

    // validação nome
    if (nome.value.trim().length < 2) {
        erroNome.textContent = "Verifique se o nome possui mais de 1 caractere.";
        nome.focus();
        return false;
    }

    // validação preço
    if (preco.value === "" || preco.value <= 0) {
        erroPreco.textContent = "Não possui preço negativo ou zero para produtos!";
        preco.focus();
        return false;
    }

    // validação estoque
    if (estoque.value === "" || estoque.value < 0) {
        erroEstoque.textContent = "Não possui estoque negativo!";
        estoque.focus();
        return false;
    }

    return true; // tudo ok
}
</script>
