

<?php

$testes = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

foreach($testes as $teste){
    foreach($teste as $v){
    echo $v;
    }
}