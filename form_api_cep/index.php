<?php






?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="axios.min.js"></script>
    <div class="form">
      
            <p>
                <label for="">Cep</label>
                <input type="text" name="" id="cep">
            </p>
            <p>
                <label for="">Estado</label>
                <input type="text" name="" id="estado">
            </p>
            <p>
                <label for="">Cidade</label>
                <input type="text" name="" id="cidade">
            </p>
            <p>
                <label for="">Bairro</label>
                <input type="text" name="" id="bairro">
            </p>
            <button onclick="tes()">testar</button>
       
    </div>
<script>
     var estado = document.getElementById('estado')
     var cidade = document.getElementById('cidade')
     var cep = document.getElementById('cep')
     

  function tes(){

     console.log(cep.value)

     
     axios.get(`https://viacep.com.br/ws/${cep.value}/json/`, {
        
      })
      .then(function (response) {
        console.log(response.data.localidade);
        estado.value= response.data.uf
        cidade.value= response.data.localidade
        document.getElementById('bairro').value = response.data.bairro

      })
      .catch(function (error) {
        console.error(error);
      })
      .then(function () {
        // sempre será executado
      });   

 }
</script>

</body>
</html>