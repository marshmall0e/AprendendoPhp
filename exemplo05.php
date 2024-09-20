<?php

$nome = "Victoria";

function teste() {
    global $nome;
    echo $nome;

}


function teste2(){
    $nome = "Victoria";
    echo $nome. " agora no teste dois";

}

teste();
teste2();

?>