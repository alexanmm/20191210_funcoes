<?php

// c. Definir uma variável chamada numeroMagico, que contenha um
// número. Tal variável deverá estar na primeira linha do nosso código
// PHP.
$numeroMagico = 15;

/*
function maior($numero1, $numero2, $numero3){
    $maiorNumero = 0;

    if ($numero1 > $numero2) {
        $maiorNumero = $numero1;
    } else {
        $maiorNumero = $numero2;
    }

    if ($numero3 > $maiorNumero){
        $maiorNumero = $numero3;
    } 
    
    return $maiorNumero;
}
*/

// d. Modificar maior() de forma que, se receber apenas 2 parâmetros, a
// função compare esses dois números com numeroMagico.
function maiorModificada($numero1, $numero2, $numero3 = null){
    global $numeroMagico;
    $maiorNumero = 0;
    
    if ($numero3 == null){
        $numero3 = $numeroMagico;
    }

    if ($numero1 > $numero2) {
        $maiorNumero = $numero1;
    } else {
        $maiorNumero = $numero2;
    }

    if ($numero3 > $maiorNumero){
        $maiorNumero = $numero3;
    } 
    
    return $maiorNumero;
}

//$resultado =  maior(40, 20,30);
$resultado =  maiorModificada(5, 8);

// Gerar um arquivo chamado funcoes.php:
// a. Definir uma função maior() que receba 3 números e retorne o maior
// deles.
//echo "a) Maior numero: $resultado";
echo "d) Maior numero modificado: $resultado";

/*
// b. Definir uma função tabela() que receba um parâmetro base, um
// parâmetro limite, e retorne um array com a sequência de números a
// partir do número base até o número limite.
    function tabela($base, $limite){
        $retornoArray = [];

        for ($contador = $base; $contador <= $limite; $contador++){
            $retornoArray[$contador] = $contador;
        }

        return $retornoArray;
    }

    $array = [];
    $array = tabela(9, 10);
    echo "<br>b) Array: ";
    var_dump($array);
*/

// e. Modificar tabela de forma que, se a receber apenas um parâmetro,
// a função use numeroMagico como limite
function tabela($base, $limite = null){
    global $numeroMagico;
    $retornoArray = [];

    if ($limite == null){
        $limite = $numeroMagico;
    }

    for ($contador = $base; $contador <= $limite; $contador++){
        $retornoArray[$contador] = $contador;
    }

    return $retornoArray;
}

$array = [];
$array = tabela(9);
echo "<br>e) Array: ";
var_dump($array);

// 2. Gerar um arquivo chamado superficie.php:
// a. Definir uma função triangulo() que retorne sua superfície.





// b. Definir uma função retangulo() que retorne sua superfície.




// c. Definir uma função quadrado() que retorne sua superfície.



// d. Utilizando a função pi(), definir uma função circulo() que retorne sua
// superfície.


?>