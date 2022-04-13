
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
    public function apresentar()
    {
        $visao = '';
        foreach ($this->jogo as $posi) {
            $visao = $visao . "\n";
            foreach ($posi as $va) {
                $visao = $visao . "$va   ";
            }
        }
        echo $visao;
        $this->jogar();
    }

    public function verificar()
    {
        if ($this->jogo[0][0] == 'X' && $this->jogo[0][1] == 'X' && $this->jogo[0][2] == 'X' || $this->jogo[1][0] == 'X' && $this->jogo[1][1] == 'X' && $this->jogo[1][2] == 'X' || $this->jogo[2][0] == 'X' && $this->jogo[2][1] == 'X' && $this->jogo[2][2] == 'X') {
            echo 'jogador 1 ganhou';
        } else {
            $this->apresentar();
            $this->jogar();
        }
    }

    public function jogar()
    {
        $jogar = readline(" Jogador " . $this->jogador . " digite uma posiçao ");
        switch ($jogar) {
            case 1:
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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
                if ($this->jogador == 1) {
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

                break;
        }
    }
}

$iniciar = new jogar();
$iniciar->apresentar();
$iniciar->jogar();
