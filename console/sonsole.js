const inicio = prompt("inicio");
const fim = prompt("fim");

function final(){
    console.log('fim');
}

for(var i = inicio; i <= fim ; i++){
    console.log(`${i} <br>`);
}
final();