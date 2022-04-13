<?php


$jogador = null;
$jogo =
    [
        ['*', '*', '*'],
        ['*', '*', '*'],
        ['*', '*', '*']

    ];

  function jogar($tecla, $jogador = 1){

switch ($tecla) {
    case 1:
if($jogador == 1 ){
    $jogo[0][0] = 'X';
}else{
    $jogo[0][0] = '0';
}

        break;
    case 2:
        if($jogador == 1 ){
            $jogo[0][1] = 'X';
        }else{
            $jogo[0][1] = '0';
        }

        break;
    case 3:
        if($jogador == 1 ){
            $jogo[0][2] = 'X';
        }else{
            $jogo[0][2] = '0';
        }

        break;
    case 4:
        if($jogador == 1 ){
            $jogo[1][0] = 'X';
        }else{
            $jogo[1][0] = '0';
        }

        break;
    case 5:
        if($jogador == 1 ){
            $jogo[1][1] = 'X';
            echo $jogo[0][0] . "   " . $jogo[0][1] . "   " . $jogo[0][2] . "\n" . $jogo[1][0] . "   " . $jogo[1][1] . "   " . $jogo[1][2] . "\n" . $jogo[2][0] . "   " . $jogo[2][1] . "   " . $jogo[2][2];

        }else{
            $jogo[1][1] = '0';
        }

        break;
    case 6:
        if($jogador == 1 ){
            $jogo[1][2] = 'X';
        }else{
            $jogo[1][2] = '0';
        }

        break;
    case 7:
        if($jogador == 1 ){
            $jogo[2][0] = 'X';
        }else{
            $jogo[2][0] = '0';
        }

        break;
    case 8:
        if($jogador == 1 ){
            $jogo[2][1] = 'X';
        }else{
            $jogo[2][1] = '0';
        }

        break;
    case 9:
        if($jogador == 1 ){
            $jogo[2][2] = 'X';
        }else{
            $jogo[2][2] = '0';
        }
        break;


    default:

        break;
}
    }


print_r($jogo);


echo $jogo[0][0] . "   " . $jogo[0][1] . "   " . $jogo[0][2] . "\n" . $jogo[1][0] . "   " . $jogo[1][1] . "   " . $jogo[1][2] . "\n" . $jogo[2][0] . "   " . $jogo[2][1] . "   " . $jogo[2][2];

$teclaTeclado = readline("Digite a posiçao ");

jogar($teclaTeclado);
