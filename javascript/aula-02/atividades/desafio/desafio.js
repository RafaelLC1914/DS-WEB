function criarCard (){
var nome = document.getElementById("name").value;
var descriçao = document.getElementById("descriçao").value;

if (nome === "" || descriçao === "") {
    alert("Por favor, preencha todos os campos.");
    return;
}
var card = document.createElement("div");
card.setAttribute("class", "card");

var cardNome = document.createElement("h2");



var div = document.createElement('div');
div.id = 'area';
div.style.width = '300px';
div.style.height = '300px';
div.style.backgroundColor = 'gray';
document.body.appendChild(div);
}
