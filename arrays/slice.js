//slice copia posiçoes de arrays e quarda em um novo array

let nomes = ['jhon','ana', 'carlos', 'antonio','jorge','jhonatas' ]
//copia a posiçao 1,2,3 o 4 nao é copido
let nomesCopiados = nomes.slice(1,4)
console.log(nomesCopiados)

//copia as duas ultimas posiçoes
let ultimosNomes = nomes.slice(-2)
console.log(ultimosNomes)


//volta 4 posiçoes e informa ate onde quer copiar - 1
let novosNome = nomes.slice(-4, 5)
console.log(novosNome)
