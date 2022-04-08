 
//funçao convencional 
function somar(n1,n2){
    return n1 + n2
}

console.log(somar(5,9))


//funçao express
let somar2 = function(n1, n2 = 5){
    return n1 + n2
}

console.log(somar2(6))


//function arrow
let somar3 = (n1,n2) => n1 + n2

console.log(somar3(7,10))