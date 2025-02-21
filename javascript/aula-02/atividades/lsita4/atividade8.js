function clicar(){
    var usuario = document.getElementById('Usuario').value
    var senha = document.getElementById('senha').value

    if(usuario == "admin" && senha == "12345"){
        document.getElementById('resultado').innerHTML = 'boas vindas'
    }else{
        document.getElementById('resultado').innerHTML = 'Erro, senha ou usuario invalido'
    }
}