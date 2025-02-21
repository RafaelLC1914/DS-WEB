function botao(){
    var numero1 = document.getElementById('numero1').value
    var numero1 = Number.parseInt(numero1)
    var numero2 = document.getElementById('numero2').value
    var numero2 = Number.parseInt(numero2)
    var numero3 = document.getElementById('numero3').value
    var numero3 = Number.parseInt(numero3)
    var resultado = document.getElementById('resultado').value

    if(numero1 && numero2 < numero3){
        document.getElementById('resultado').innerHTML = numero3 + ' é o maior'
    }else if(numero1 && numero3 < numero2){
        document.getElementById('resultado').innerHTML = numero2 + ' é o maior'
    }else if(numero2 && numero3 < numero1){
        document.getElementById('resultado').innerHTML = numero1 + ' é o maior'
    }
}