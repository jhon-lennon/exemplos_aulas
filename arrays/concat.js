
//concat copia arrays e preserva os valores originais
let nomes = ['jhon','ana', 'carlos', 'antonio','jorge','jhonatas' ]

//exemplo sem o concat-----------------------------------------------
let novosNomes = nomes
novosNomes[1]= 'julho' //essa alteraçao vai aconteer nas duas variavesis
console.log(nomes)
console.log(novosNomes)


//exemplo com o concat-----------------------------------------------
let Nnomes = nomes.concat()
Nnomes[1] = 'francisco' // vai alterar apenas a o array Nnomes

console.log(nomes)
console.log(Nnomes)

//exemplo junçao---------------------------------------------------

let animais1 = ['cachorro', 'gato']
let animais2 = ['cavalo', 'zebra']
//jantar os 2 arrays e adiciona a novo
let animais = animais1.concat(animais2)

//junta os dois e adiciona
let maisAnimais = animais1.concat(animais2, 'capivara', 'porco')
// tambem pode se feito assim ('capivara', 'porco', animais2)

console.log(animais)
console.log(maisAnimais)



