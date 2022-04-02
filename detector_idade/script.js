

function calcular() {

    var ano = document.getElementById('nas')
    ano = Number(ano.value)
    var ano_atual = new Date()
    ano_atual = ano_atual.getFullYear()
    var idade = ano_atual - ano
    var resultado = document.getElementById('res')
    var sexo = document.getElementsByName('sexo')
    var foto = document.createElement('img')
    foto.setAttribute('id', 'imagem')
  // var foto = document.getElementById('imagem')
    if (sexo[0].checked) {
        sexo = 'masculino'
    } else {
        sexo = 'femenino'
    }

    if (ano > ano_atual || ano == 0) {
        window.alert('ano invalido')
    }
    if (sexo == 'masculino') {
        //masculino
        if (idade > 0 && idade < 12) {

            resultado.innerText =  `Menino detectado com ${idade} anos de idade`
            foto.src ='imagens/menino.jpg'
            resultado.appendChild(foto)
        } else if (idade < 20) {
            resultado.innerText =  `Homem jovem detectado com ${idade} anos de idade`
            foto.src ='imagens/homem_jovem.jpg'
            resultado.appendChild(foto)
        } else if (idade < 60) {
            resultado.innerText =  `Homen adulto dectado com ${idade} anos de idade`
            foto.src ='imagens/homem_adulto.jpg'
            resultado.appendChild(foto)
        } else if(idade < 120){
            resultado.innerText =  `idoso com ${idade} anos de idade`
            foto.src ='imagens/homem_idoso.jpg'
            resultado.appendChild(foto)
        }else{
            resultado.innerText =  `Difunto detectado com ${idade} anos de idade`
            foto.src ='imagens/homem_esqueleto.jpg'
            resultado.appendChild(foto)
        }
    }else{ 
        // femenino
        if (idade > 0 && idade < 12) {

            resultado.innerText =  `Menina detectada com ${idade} anos de idade`
            foto.src ='imagens/menina.jpg'
            resultado.appendChild(foto)
        } else if (idade < 20) {
            resultado.innerText =  `Mulher jovem detectada com ${idade} anos de idade`
            foto.src ='imagens/mulher_jovem.jpg'
            resultado.appendChild(foto)
        } else if (idade < 60) {
            resultado.innerText =  `Mulher adulta dectada com ${idade} anos de idade`
            foto.src ='imagens/mulher_adulta.jpg'
            resultado.appendChild(foto)
        } else if(idade < 120) {
            resultado.innerText =  `idosa detectada com ${idade} anos de idade`
            foto.src ='imagens/mulher_idosa.jpg'
            resultado.appendChild(foto)
        }else{
            resultado.innerText =  `Difunta detectada com ${idade} anos de idade`
            foto.src ='imagens/mulher_esqueleto.jpg'
            resultado.appendChild(foto)
        }



    }

}
