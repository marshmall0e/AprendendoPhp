<?php 
//Funções recursivas

$hierarquia = array (
    array(
        'nome_cargo' => 'CEO',
        'subordinados'=> array(
            // Início: Diretor
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados'=> array(
                    // Início: Gerente de Vendas
                    array(
                        'nome_cargo'=> 'Gerente de Vendas',
                    )
                    // Término: Gerente de Vendas
                ),
            ),
            // Término: Diretor Comercial
            
            // Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados'=> array(
                    // Início: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=> 'Gerente de Contas a Pagar',
                        'subordinados'=> array(
                            // Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            // Término: Supervisor de Pagamentos
                        ),
                    ),
                    // Término: Gerente de Contas a Pagar
                ),
            ), 
            // Término: Diretor Financeiro
            
            // Início: Gerente de Compras
            array(
                'nome_cargo' => 'Gerente de Compras',
                'subordinados'=> array(
                    // Início: Supervisor de Suprimentos
                    array(
                        'nome_cargo' => 'Supervisor de Suprimentos',
                        'subordinados'=> array(
                            array(
                                'nome_cargo'=> 'Funcionario'
                            )
                        ) // Término: Supervisor de Suprimentos
                    ) // Término: Gerente de Compras
                ),
            ), 
        ) 
    )
);

function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) { // Corrigido
        $html .= '<li>';
        $html .= $cargo['nome_cargo']; // Corrigido
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) { // Corrigido
            $html .= exibe($cargo['subordinados']);
        }
        $html .= '</li>';
    }
    
    $html .= '</ul>';
    return $html;
}

echo exibe($hierarquia);

?>