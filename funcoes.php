<?php
    $jogador = "Jordan";

    function jogarBasquete($pontos){
        global $jogador;
        echo "$jogador fez $pontos pontos";
    }

    function fezFalta(){
        global $jogador;
        echo "$jogador fez falta";
    }

    jogarBasquete(5);
    echo "<br>";

    fezFalta();

?>