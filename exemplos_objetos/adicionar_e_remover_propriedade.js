
var pessoa = {
    nome: 'jhon',
    idade: 28,
    sexo: 'masculino',

}

console.log(pessoa)
//add atributo
pessoa.telefone = 99857660
console.log(pessoa)

//remover atributo
delete pessoa.sexo
console.log(pessoa)

//add metodo
pessoa.alterarNome = function(novoNome){
    this.nome = novoNome
}

pessoa.alterarNome('lennon')  

console.log(pessoa)
