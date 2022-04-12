
let pessoas = [
    {nome: 'ana', idade: 24},
    {nome: 'jhon', idade:28},
    {nome: 'joana', idade: 18},
    {nome: 'leticia', idade: 16},
    {nome: 'marta', idade: 26},
    {nome: 'ana', idade: 27},
 ]

 // retorna todos os objetos referente a condiçao
 let novasPessoas = pessoas.filter(pes => pes.idade > 24)

 console.log(novasPessoas)
 console.log(pessoas)
