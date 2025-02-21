function parEimpar(){
    var numero1 = document.getElementById('numero1').value
    var numero1 = Number.parseInt(numero1)
    var resultdo = numero1 % 2 == 0 ? 'seu numero é par' : "seu numero é impar"

    document.getElementById('resultado').innerHTML = resultdo


}