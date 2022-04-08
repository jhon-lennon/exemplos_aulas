
function pessoa(no, ida, se, pe){
    this.nome = no;
    this.idade = ida;
    this.sexo = se;
    this.peso = pe;

    this.alterarNome = function(novoNome){
       this.nome = novoNome;
    }

    this.resumo = function(){
        return `Nome: ${this.nome}, idade: ${this.idade}, peso: ${this.peso}, sexo: ${this.sexo}`
    }


}

var usuario1 = new pessoa('jhon', 28, 'masculino', 67.56)
usuario1.alterarNome('lennon')

console.log(usuario1)