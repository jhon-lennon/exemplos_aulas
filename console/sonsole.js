var inicio = readline('inicio: ');
var fim = readline('fim: ');

function final(){
    console.log('fim');
}

for(var i = inicio; i <= fim ; i++){
    console.log(`${i} <br>`);
}
final();