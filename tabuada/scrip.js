
function calcular(){
    var num = document.getElementById('num')
    num = Number(num.value)
    var res = document.getElementById('res')
    res.innerHTML = ""
for(var i = 1; i <= 10; i++){

   

    res.innerHTML += `${num} x ${i} = ${num * i} <br>`

}


}