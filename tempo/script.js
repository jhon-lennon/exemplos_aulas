
function iniciar(){
    var hora = new Date
 var agora = hora.getHours()

    if(agora > 0 && agora < 12 ){

        var mesnagem = document.getElementById('msg')
        mesnagem.innerText = `Bom dia. Hora atual ${agora}:${hora.getMinutes()}`
        var imagem = window.document.getElementById('img')
        imagem.src = "manha.jpg"
        var fundo = document.getElementById('corpo')
        fundo.style.background = '#78a7caac'


    }else if(agora >= 12 && agora < 18 ){
        var mesnagem = document.getElementById('msg')
        mesnagem.innerText = `Boa tarde ${agora}:${hora.getMinutes()}`
        var imagem = window.document.getElementById('img')
        imagem.src = "tarde.jpg"
        var fundo = document.getElementById('corpo')
        fundo.style.background = '#ce704d'
        


    }else if(agora >= 18 && agora < 23){
        var mesnagem = document.getElementById('msg')
        mesnagem.innerText = `Boa noite ${agora}:${hora.getMinutes()}`
        var imagem = window.document.getElementById('img')
        imagem.src = "noite.jpg"
        var fundo = document.getElementById('corpo')
        fundo.style.background = '#2302f7ac'

    }
}