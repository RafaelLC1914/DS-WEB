function botao(){
    var  idade = document.getElementById('idade').value
    if (idade >= 18){
        document.getElementById('resultado').innerHTML = 'você é maior de idade'
    }else{
        document.getElementById('resultado').innerHTML = 'você é menor de idade'
    }
}