


function coment() {
    var divcomentarios = document.getElementById('co')
    var comenta = document.getElementById('coment')
    console.log('teste')

    axios({
        method: 'post',
        url: 'database.php',
        data: {
            nome: 'Santos',
            comentario: 'ggg'
        }
    })


        .then(function (response) {
            // handle success
            console.log(response.data);

              var comentarios = response.data
              divcomentarios.innerHTML = ''
             comentarios.forEach((elemento, indice) => {

                  divcomentarios.innerHTML += '<p>' + elemento.comentario + '</p>'
              });




        })
        .catch(function (error) {


            console.log(error);
        })
        .then(function () {

        });

}

function aja() {
    var divcomentarios = document.getElementById('co')
    var comenta = document.getElementById('coment')
   
    $.ajaxSetup({
        headers: {
          'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


    $.ajax({
        type: "POST",
        url: 'database.php',
        data: {
            nome: 'Santos',
            comentario: comenta.value
        },




        
        success: function (dados) {


            var objeto = JSON.parse(dados);

            console.log( objeto)







            var comentarios = objeto
            divcomentarios.innerHTML = ''
            comentarios.forEach((elemento, indice) => {

                divcomentarios.innerHTML += '<p>' + elemento.comentario + '</p>'
            });





        },
        error: function (erro) {
            console.log(erro)
        }
    });








}