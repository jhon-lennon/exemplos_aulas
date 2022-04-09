

//tipos de declaraçao
let array1 = new Array()
let arrey2 = []
let array3 = [1,2,3]

//array de objetos
let array4 = [

   { nome :'jhon', idade : 28, altura : 1.70, peso : 67.5},
   { nome :'ana', idade : 23, altura : 1.60, peso : 53.5},
]

console.log(array4)

// length quantidade de atributos
console.log(array3.length)

//forEach

array4.forEach(pessoa =>{
    console.log(pessoa.nome)
    console.log(pessoa.idade)

})


//----------------------------------------------------------
//function pop RETIRA O ULTIMO VALOR DO ARRAY

let numeros = [5,2,9,6,4,7,6,3]

console.log(numeros)
numeros.pop()
console.log(numeros)


//--------------------------------------------------------
//function push ADICIONA UM VALOR NA ULTIMA POSIÇAO DO ARRAY

let numeros2 = [5,2,9,6,4,7,6,3]

console.log(numeros2)
numeros2.push(8)
console.log(numeros2)

//--------------------------------------------------------
//function shift RETIRA O PRIMEIRO VALOR DO ARRAY

let numeros3 = [5,2,9,6,4,7,6,3]

console.log(numeros3)
numeros3.shift()
console.log(numeros3)

//--------------------------------------------------------
//function unshift ADICIONA UM VALOR NO INICIODO ARRAY

let numeros4 = [5,2,9,6,4,7,6,3]

console.log(numeros4)
numeros4.unshift(10)
console.log(numeros4)

