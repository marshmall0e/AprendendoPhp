<?php 

//Switch na pratica 

$diaDaSemana = 4; /*esse comando irá mostrar o dia atual da semana: date("w");*/

switch ($diaDaSemana) { 
    case 0:
        echo"Domingo";  
        break;
        case 1:
            echo "Segunda-Feira";   
            break;
            case 2:
                echo "Terça-Feira";
                break;
                case 3:
                    echo "Quarta-Feira";    
                    break;
                    case 4:
                        echo "Quinta-Feira";    
                        break;
                        case 5: 
                            echo "Sexta-Feira"; 
                            break;
                            case 6:
                                echo "Sábado";
                                break;
                                default:
                                echo "Data Inválida";
                                break;

}


?>