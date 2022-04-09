// criar um objeto literal
var pessoa = {
    nome: 'jhon',
    idade: 28,
    peso: 67.76,
    sexo: 'masculino',
    estudando:[
        'javaScript',
        'PHP',
        'Html',
        'css',

    ],
    "gosta de comer": 'churrasco',

    alterar_nome: function(novoNome){
        this.nome = novoNome
    },

    detalhes: function(){
        var estuda =''
        for (var key in this.estudando) {
          estuda += this.estudando[key]+','
        
        }
        return `${this.nome} tem ${this.idade} anos de idade, pesa ${this.peso} Kg, é do sexo ${this.sexo} e gosta de comer ${this["gosta de comer"]} e estar estudando ${estuda}`
    }

}
pessoa.alterar_nome('lennon')

console.log(pessoa.detalhes())