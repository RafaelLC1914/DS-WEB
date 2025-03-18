//window.document.write(window.document.URL)

var p1 = window.document.getElementsByTagName("p")[2]

document.getElementById("quarto parágrafo").innerHTML= p1.innerText

document.getElementById("teste").innerHTML="Hello Word";

var classes = window.document.getElementsByClassName("exemplo")
classes[0].innerHTML = "Hello Wold"


 
document.querySelector("p#paragrafo").style.backgroundColor = "blue" 

var parágrafo=document.querySelector('p').style
parágrafo.backgroundColor = "red" 
parágrafo.color= "white"



function alertaDeClique(){
    alert('Você clicou no botão')

}

function calcular(){
    var numero1 = document.getElementById('numero1').value
    var numero2 = document.getElementById('numero2').value

    console.log(typeof numero1)
    var numero1 = Number.parseInt(numero1)
    var numero2 = Number.parseInt(numero2)
    console.log(typeof numero1)

    var resultdo = numero1 + numero2

    document.getElementById('resultado').innerHTML = "Resultdo: "+resultado
}