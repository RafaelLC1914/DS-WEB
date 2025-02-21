function botao(){
    var numero1 =  document.getElementById('numero1').value
    if(numero1 == 0){
        document.getElementById('resultado').innerHTML = 'igual a 0'
    }else if(numero1>=0){
        document.getElementById('resultado').innerHTML = 'positivo'
    }else if(numero1<=0){
        document.getElementById('resultado').innerHTML = 'negativo'
    }

    

}