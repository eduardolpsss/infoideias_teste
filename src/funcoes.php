<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

    */
    public function SeculoAno(int $ano = 2004): int {
        if ($ano > 1 && $ano <= 101) {
        echo "1";
        } elseif ($ano > 102 && $ano <= 201) {
        echo "2";
        } elseif ($ano > 202 && $ano <= 301) {
        echo "3";
        } elseif ($ano > 302 && $ano <= 401) {
        echo "4";
        } elseif ($ano > 402 && $ano <= 501) {
        echo "5";
        } elseif ($ano > 502 && $ano <= 601) {
        echo "6";
        } elseif ($ano > 602 && $ano <= 701) {
        echo "7";
        } elseif ($ano > 702 && $ano <= 801) {
        echo "8";
        } elseif ($ano > 802 && $ano <= 901) {
        echo "9";
        } elseif ($ano > 902 && $ano <= 1001) {
        echo "10";
        } elseif ($ano > 1002 && $ano <= 1101) {
        echo "11";
        } elseif ($ano > 1102 && $ano <= 1201) {
        echo "12";
        } elseif ($ano > 1202 && $ano <= 1301) {
        echo "13";
        } elseif ($ano > 1302 && $ano <= 1401) {
        echo "14";
        } elseif ($ano > 1402 && $ano <= 1501) {
        echo "15";
        } elseif ($ano > 1502 && $ano <= 1601) {
        echo "16";
        } elseif ($ano > 1602 && $ano <= 1701) {
        echo "17";
        } elseif ($ano > 1702 && $ano <= 1801) {
        echo "18";
        } elseif ($ano > 1802 && $ano <= 1901) {
        echo "19";
        } elseif ($ano > 1902 && $ano <= 2001) {
        echo "20";
        } elseif ($ano > 2002 && $ano <= 2101) {
        echo "21";
        }

        return $ano;
    }

	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

    */
    public function PrimoAnterior(int $numero = 10): int {
        $prime = true;
        $n = $numero;
        $divisores = 0;
        
        echo "Número inserido: $numero <br /><br />";

        for($count=2; $count<$n; $count++)
         if($n % $count == 0){
          echo "Multiplo de $count.<br />";
          $divisores++;
        }
       
        if($divisores){
            echo "<br />Não é primo, tem $divisores divisores além de 1 e ele mesmo.";
        } else{
            echo "<br />É primo!";
            $prime = true;
        }

        for($i = $n - 1; $i >= 2; $i--) {
            $prime = true;
            for($j = 2; $j <= sqrt($i); $j++ ) {
                if($i % $j === 0) {
                    $prime = false;
                    break;
                }
            }
            if ($prime == true) {
                echo "<br /><br /> número primo imediatamente anterior ao número recebido: ".$i;
                return $i;
            }
        }
        return 2;
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    // public function SegundoMaior(array $arr): int {

    // }

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

	// public function SequenciaCrescente(array $arr): boolean {

    // }
}

$func = new Funcoes;
$func->SeculoAno();
$func->PrimoAnterior();

?>