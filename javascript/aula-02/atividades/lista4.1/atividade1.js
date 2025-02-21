
var div = document.createElement('div');
div.id = 'area';
div.style.width = '300px';
div.style.height = '300px';
div.style.backgroundColor = 'blue';
document.body.appendChild(div);

var div = window.document.getElementById('area')
div.addEventListener('mouseenter', entrar)
div.addEventListener('mouseout', sair)


function entrar(){
div.innerText = 'Entrou!'
div.style.background = 'red'
div.style.width = '400px';
div.style.height = '400px';

}
function sair(){
div.innerText = 'Saiu!'
div.style.background = 'blue'
div.style.width = '300px';
div.style.height = '300px';
}


var input = document.createElement('input')

document.body.appendChild(input);


