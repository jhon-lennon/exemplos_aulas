

import { axios } from "./axios.min"

 var estado = document.getElementById('estado')
  function tes(){

     console.log(estado)

     
     axios.get('viacep.com.br/ws/01001000/json/', {
        
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.error(error);
      })
      .then(function () {
        // sempre será executado
      });   

 }