<?php 

//array bidimensional 

$pessoas = array();

array_push($pessoas,array(
    "nome"=> "Victoria",    
    "idade"=> 22
));


array_push($pessoas,array(
    "nome"=> "Mariany",    
    "idade"=> 20
));

echo json_encode($pessoas);  #JSon encode transforma um array em json

?>

<!--Você criou um array de pessoas.
Adicionou duas pessoas com seus nomes e idades.
Exibiu o nome da primeira pessoa.-->