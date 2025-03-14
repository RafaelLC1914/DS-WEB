//Função para validação dos dados do cliente
function validarDadosProduto(){

    //Verificação do codigo.
    if(formulario.codigo.value.length < 12 || formulario.codigo.value == "" ||formulario.codigo.value.length > 15 ){
        formulario.codigo.focus();
        document.getElementById('erro-codigo').innerHTML = "O código precisa ter entre 12-15 digitos.";
        document.getElementById('erro-nome').innerHTML = ""
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;   
    }

    //Verificação de nome.
    if(formulario.nome.value.length  < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "Verifique se o nome possui mais de 2 caracteres.";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "";
        return false;   
    }

    //Verificação Estoque.
    if (document.getElementById('estoque').value < 0) {
        document.getElementById('estoque').focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "Não possui estoque negativo!";
        document.getElementById('erro-preco').innerHTML = "";
        return false;
    }
    //Verificação Do Preco.
    if (document.getElementById('preco').value < 0) {
        document.getElementById('preco').focus();
        document.getElementById('erro-codigo').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-estoque').innerHTML = "";
        document.getElementById('erro-preco').innerHTML = "Não possui preço negativo para produtos!";
        return false;
    }
}