
// A funçao map() faz um ciclo por cada posiçao com a posibilidae de atribuir
// um novo valor com uma oeraçao ou un resultado de uma funçao (com o return )


let nomes = ['jhon','ana', 'carlos', 'antonio','jorge','jhonatas' ]

// cria um novo array com a quantidade de caracter de cada nome
let novos = nomes.map(n =>n.length)
console.log(novos)


// cria um novo array com o valor do retorno da funçao
let novosNomes = nomes.map(nome => { return `ola, ${nome}`})
console.log(novosNomes)

