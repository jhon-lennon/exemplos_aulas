<?php
class jogar
{

    public $jogador = 1;
    public $jogo =
    [
        ['*', '*', '*'],
        ['*', '*', '*'],
        ['*', '*', '*']

    ];
    public $img1 ='limpo.jpg';
    public $img2 ='limpo.jpg';
    public $img3 ='limpo.jpg';
    public $img4 ='limpo.jpg';
    public $img5 ='limpo.jpg';
    public $img6 ='limpo.jpg';
    public $img7 ='limpo.jpg';
    public $img8 ='limpo.jpg';
    public $img9 ='limpo.jpg';

    public function apresentar($fim = false, $jogador = false)
    {
        $visao = '';
        $posicoesdiponiveis ='';
        foreach ($this->jogo as $posi) {
            $visao = $visao . "\n";
            foreach ($posi as $va) {
                $visao = $visao . "$va   ";
                
            }
        }
        echo"Jogador 1 (X) | Jogador 2 (0)\n";
        echo $visao."\n";

        if($fim == false){
            $this->jogar();
        }else{
            die("\nFIM $jogador\n");
        }
        
    }

    public function verificar()
    {
        if (
            //verifica orizontal
            $this->jogo[0][0] == 'X' && $this->jogo[0][1] == 'X' && $this->jogo[0][2] == 'X' ||
            $this->jogo[1][0] == 'X' && $this->jogo[1][1] == 'X' && $this->jogo[1][2] == 'X' ||
            $this->jogo[2][0] == 'X' && $this->jogo[2][1] == 'X' && $this->jogo[2][2] == 'X' ||

            //verivica vertical
            $this->jogo[0][0] == 'X' && $this->jogo[1][0] == 'X' && $this->jogo[2][0] == 'X' ||
            $this->jogo[1][0] == 'X' && $this->jogo[1][1] == 'X' && $this->jogo[2][1] == 'X' ||
            $this->jogo[0][2] == 'X' && $this->jogo[1][2] == 'X' && $this->jogo[2][2] == 'X' ||

            //verivica na diagonal
            $this->jogo[0][0] == 'X' && $this->jogo[1][1] == 'X' && $this->jogo[2][2] == 'X' ||
            $this->jogo[0][2] == 'X' && $this->jogo[1][1] == 'X' && $this->jogo[2][0] == 'X' 

        ) {
            $this->apresentar(true, 'jogador 1 (X) ganhou');

        } elseif(    
             //verifica orizontal
            $this->jogo[0][0] == 0 && $this->jogo[0][1] == 0 && $this->jogo[0][2] == 0 ||
            $this->jogo[1][0] == 0 && $this->jogo[1][1] == 0 && $this->jogo[1][2] == 0 ||
            $this->jogo[2][0] == 0 && $this->jogo[2][1] == 0 && $this->jogo[2][2] == 0 ||

            //verivica vertical
            $this->jogo[0][0] == 0 && $this->jogo[1][0] == 0 && $this->jogo[2][0] == 0 ||
            $this->jogo[0][1] == 0 && $this->jogo[1][1] == 0 && $this->jogo[2][1] == 0 ||
            $this->jogo[0][2] == 0 && $this->jogo[1][2] == 0 && $this->jogo[2][2] == 0 ||

            //verivica na diagonal
            $this->jogo[0][0] == 0 && $this->jogo[1][1] == 0 && $this->jogo[2][2] == 0 ||
            $this->jogo[0][2] == 0 && $this->jogo[1][1] == 0 && $this->jogo[2][0] == 0 )
            {
                
                $this->apresentar(true, 'jogador 2 (0) ganhou');
              
        }else {
            $this->apresentar();
            $this->jogar();
        }
    }

    public function jogar()
    {
        $jogar = $_GET['jogar'];
        switch ($jogar) {
            case 1:
                if($this->jogo[0][0] != '*'){
                    echo" Opção invalid |";
                    //$this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][0] = 'X';
                    $this->img1 ='xix.jpg';
                    $this->jogador = 2;

                    $this->verificar();
                } else {
                    $this->jogo[0][0] = '0';
                    $this->img1 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 2:
                if($this->jogo[0][1] != '*'){
                    echo" Opção invalid |";
                   // $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][1] = 'X';
                    $this->img2 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[0][1] = '0';
                    $this->img2 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 3:
                if($this->jogo[0][2] != '*'){
                    echo" Opção invalid |";
                  //  $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][2] = 'X';
                    $this->img3 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[0][2] = '0';
                    $this->img3 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 4:
                if($this->jogo[1][0] != '*'){
                    echo"Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][0] = 'X';
                    $this->jogador = 2;
                    $this->img4 ='xix.jpg';

                    $this->verificar();
                } else {
                    $this->jogo[1][0] = '0';
                    $this->img4 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 5:
                if($this->jogo[1][1] != '*'){
                    echo" Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][1] = 'X';
                    $this->img5 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[1][1] = '0';
                    $this->img5 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 6:
                if($this->jogo[1][2] != '*'){
                    echo"Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][2] = 'X';
                    $this->img6 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[1][2] = '0';
                    $this->img6 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 7:
                if($this->jogo[2][0] != '*'){
                    echo" Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][0] = 'X';
                    $this->img7 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][0] = '0';
                    $this->img7 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 8:
                if($this->jogo[2][1] != '*'){
                    echo"Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][1] = 'X';
                    $this->img8 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][1] = '0';
                    $this->img8 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 9:
                if($this->jogo[2][2] != '*'){
                    echo"Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][2] = 'X';
                    $this->img9 ='xix.jpg';

                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][2] = '0';
                    $this->img9 ='zero.jpg';
                    $this->jogador = 1;
                    $this->verificar();
                }
                break;

            default:
            echo" Opção invalid |";
            $this->jogar();
                break;
        }
    }
}

$iniciar = new jogar();
$iniciar->apresentar();
$iniciar->jogar();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Da Velha</title>
</head>

<body>
    
    <div style="text-align: center; margin-top: 100px;">
        <p> <a href="?jogar=1"> <img src="<?=$iniciar->img1?>" alt=""> </a> <a href="index.php?jogar=2"> <img src="<?=$iniciar->img2?>"alt=""></a> <img src="<?=$iniciar->img3?>" alt=""><br>
        <img src="<?=$iniciar->img4?>"alt=""> <img src="<?=$iniciar->img5?>" alt=""> <img src="<?=$iniciar->img6?>"alt=""><br>
        <img src="<?=$iniciar->img7?>" alt=""> <img src="<?=$iniciar->img8?>" alt=""> <img src="<?=$iniciar->img9?>" alt="">
    </p>

    </div>
    

</body>

</html>