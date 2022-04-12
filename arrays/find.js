

let pessoas = [
    {nome: 'ana', idade: 24},
    {nome: 'jhon', idade:28},
    {nome: 'joana', idade: 18},
    {nome: 'leticia', idade: 16},
    {nome: 'marta', idade: 26},
    {nome: 'ana', idade: 27},


 ]
//funçao fimd() retorna o objeto
let teste = pessoas.find(pes => pes.idade == 28)// pes substitui pessoas
console.log(teste)


//funçao findIndex() retorna a posiçao do objeto
let teste2 = pessoas.findIndex(pes => pes.idade == 28)
console.log(teste2)


// senao encontrar retorna undefined
let teste3 = pessoas.find(pes => pes.nome == 'maria')
console.log(teste3)



