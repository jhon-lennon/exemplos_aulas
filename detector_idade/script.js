

function calcular(){

    var ano = document.getElementById('nas')
    ano = Number(ano.value)
   var ano_atual = new Date()
   ano_atual = ano_atual.getFullYear()
   var idade = ano_atual - ano

if(ano > ano_atual || ano == 0 ){
    console.log('ano invalido')
}else if(idade > 0 && idade < 12){
    console.log(`criança com ${idade} de idade`)
}else if(idade < 20){
    console.log(`jovem com ${idade} de idade`)
}else if(idade < 60){
    console.log(`adulta com ${idade} de idade`)
}else{
    console.log(`idoso com ${idade} de idade`)
}
}
    