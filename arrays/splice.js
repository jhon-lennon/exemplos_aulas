let nomes = ['jhon','ana', 'carlos', 'antonio','jorge','jhonatas' ]
//exclui tudo apartir da posiçao 4
nomes.splice(4)
console.log(nomes)

//exclui a posiçao 2
nomes.splice(2,1)
console.log(nomes)

//apartir da posiçao 2 exclui 2 e adiciona 4 valores
nomes.splice(2,2,'joao','maria','pedro','luzia')
console.log(nomes)

// exclui apartir da posiçao 3 e adiciona a uma variavel
let nomesExcluidos = nomes.splice(3)
console.log(nomes)
console.log(nomesExcluidos)


