
function contar(){
    var quant = document.getElementById('quant')
    quant = Number(quant.value) + 1
    var passo = document.getElementById('passo')
    passo = Number(passo.value)
    var res = document.getElementById('res')

    if(passo < 1){
        window.alert('o passa nao pode ser menor 1')

        passo = 1
        
    } 
    
    if(quant < passo || quant < 1){
        window.alert('a quantidade nao pode ser menor que o passo e nao deve estar vazia')
        
    }else{


    var resutado = ''
    console.log(`passo ${passo} quantidade ${quant}  `)
   var i = 1
   for(; i < quant; i += passo){

    resutado +=`${i} \u{1F604} `
    
    }
    res.innerText = resutado+`\u{1F3C1}`
}


}