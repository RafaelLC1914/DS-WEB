function botao(){
    var numero1 = document.getElementById('numero1').value
    var numero1 = Number.parseInt(numero1)
    var numero2 = document.getElementById('numero2').value
    var numero2 = Number.parseInt(numero2)
    var resultado = document.getElementById('resultado').value
    var operacao = document.getElementById('operação').value

    if (operacao == '+' ){
        resultado = numero1 + numero2
    }else if(operacao == '-'){
        resultado = numero1 - numero2
    }else if(operacao == '*'){
        resultado = numero1 * numero2
    }else if(operacao == '/'){
        resultado = numero1 / numero2
    }
    document.getElementById('resultado').innerHTML = resultado
     
    
}