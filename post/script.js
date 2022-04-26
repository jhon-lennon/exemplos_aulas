


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

          //  var comentarios = response.data
          //  divcomentarios.innerHTML = ''
           // comentarios.forEach((elemento, indice) => {

          //      divcomentarios.innerHTML += '<p>' + elemento.comentario + '</p>'
          //  });




        })
        .catch(function (error) {


            console.log(error);
        })
        .then(function () {

        });

}