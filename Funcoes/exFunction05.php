<?php 

$pessoa = array(
    'nome' => 'Victoria',   
    'idade'=> 20,
);

foreach ($pessoa as  $value) {
    if (gettype($value) == 'integer') $value += 10;
    echo $value. '<br>';
}
print_r($pessoa);
?>

<!--Esse código define um array associativo $pessoa com duas chaves: 'nome' e 'idade'. A primeira contém o valor "Victoria" e a segunda, o número 20.

Em seguida, um loop foreach percorre cada valor do array. Dentro do loop, há uma verificação: se o tipo do valor ($value) for um inteiro (integer), ele adiciona 10 a esse valor. Assim, a idade, que inicialmente é 20, se torna 30 durante a execução do loop. -->