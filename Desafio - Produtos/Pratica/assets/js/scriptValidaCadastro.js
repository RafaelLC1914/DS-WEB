function validarDadosCadastro(){

    //Verificação de nome.
    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        document.getElementById('erro-nome').innerHTML = "Verifique se o nome possui mais de 2 caracteres.";
        document.getElementById('erro-cargo').innerHTML = ""
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-senha').innerHTML = "";
        return false;   
    }


    //Verificação Email.
    if(formulario.email.value == "" || 
        formulario.email.value.indexOf('@')==-1 ||
        formulario.email.value.indexOf('.')==-1 ){
        formulario.email.focus();
        document.getElementById('erro-email').innerHTML = "Preencha o campo email corretamente!";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-cargo').innerHTML = ""
        document.getElementById('erro-senha').innerHTML = "";
        return false;
    }

    //Verificação Da cargo.
    if(formulario.cargo.value == ""){
        formulario.cargo.focus();
        document.getElementById('erro-cargo').innerHTML = "O cargo é obrigatorio"+formulario.observacao.value.length;
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-senha').innerHTML = "";
        return false;
    }

    if(formulario.senha.value == "" ||
        formulario.nome.value.length == 8){
        document.getElementById('erro-cargo').innerHTML = "";
        document.getElementById('erro-email').innerHTML = "";
        document.getElementById('erro-nome').innerHTML = "";
        document.getElementById('erro-senha').innerHTML = "Minimo de 8 digitos para asenha";
        return false;
    }


}