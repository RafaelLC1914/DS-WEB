var Capital = Number.parseInt (prompt("Digite o capital inicial"))
var taxa = Number.parseInt (prompt("Digite a taxa de juros"))
var meses = Number.parseInt (prompt("Digite os meses "))

var resultadoFinal = Capital*((taxa/100)+1)**meses;

alert(resultadoFinal.toFixed(2));

