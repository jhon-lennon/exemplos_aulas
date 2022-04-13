
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
    public function apresentar($fim = false, $jogador = false)
    {
        $visao = '';
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
        $jogar = readline("Jogador " . $this->jogador . " digite uma posiçao ");
        switch ($jogar) {
            case 1:
                if($this->jogo[0][0] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][0] = 'X';
                    $this->jogador = 2;

                    $this->verificar();
                } else {
                    $this->jogo[0][0] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 2:
                if($this->jogo[0][1] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][1] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[0][1] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 3:
                if($this->jogo[0][2] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[0][2] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[0][2] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 4:
                if($this->jogo[1][0] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][0] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[1][0] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 5:
                if($this->jogo[1][1] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][1] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[1][1] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 6:
                if($this->jogo[1][2] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[1][2] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[1][2] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 7:
                if($this->jogo[2][0] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][0] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][0] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 8:
                if($this->jogo[2][1] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][1] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][1] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }

                break;
            case 9:
                if($this->jogo[2][2] != '*'){
                    echo"\n Opção invalid |";
                    $this->jogar();
                }
                elseif ($this->jogador == 1) {
                    $this->jogo[2][2] = 'X';
                    $this->jogador = 2;
                    $this->verificar();
                } else {
                    $this->jogo[2][2] = '0';
                    $this->jogador = 1;
                    $this->verificar();
                }
                break;

            default:
            echo"\n Opção invalid |";
            $this->jogar();
                break;
        }
    }
}

$iniciar = new jogar();
$iniciar->apresentar();
$iniciar->jogar();
