function botao(){
    var numero1 = document.getElementById('numero1').value
    var numero1 = Number.parseInt(numero1)
    var resultado = document.getElementById('resultado').value

    if (numero1 % 2 == 0){
        document.getElementById('resultado').innerHTML = 'é par'
    }else{
        document.getElementById('resultado').innerHTML = 'é impar'
    }
    
}