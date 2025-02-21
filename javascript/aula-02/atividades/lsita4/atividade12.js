function botao(){
    var numero1 = document.getElementById('primeiro').value
    var numero1 = Number.parseInt(numero1)
    var numero2 = document.getElementById('segundo').value
    var numero2 = Number.parseInt(numero2)
    var numero3 = document.getElementById('terceiro').value
    var numero3 = Number.parseInt(numero3)
    //var resultado = document.getElementById('resultado');

    if (numero1 + numero2 > numero3 && numero1 + numero3 > numero2 && numero2 + numero3 > numero1) {
        if (numero1 == numero2 && numero2 == numero3) {
                document.getElementById('resultado').innerHTML ='valido: Triângulo Equilátero';
        } else if (numero1 == numero2 && numero1 != numero3 || numero1== numero3 && numero1 !=numero2  || numero2 == numero3 && numero2 !=numero1) {
                document.getElementById('resultado').innerHTML = 'valido: Triângulo Isósceles';
        } else {
                document.getElementById('resultado').innerHTML = 'valido: Triângulo Escaleno';
        } 
        } else {
                document.getElementById('resultado').innerHTML = 'Os lados informados não formam um triângulo válido';
        }
}
