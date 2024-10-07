<?php 

// Define o CEP que será consultado
$cep = "01310100";

// Cria a URL da API do ViaCEP usando o CEP definido
$link = "https://viacep.com.br/ws/$cep/json/";

// Inicializa uma nova sessão cURL
$ch = curl_init($link);

// Configura cURL para retornar a resposta como uma string em vez de imprimir na tela
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Desabilita a verificação do certificado SSL (apenas para fins de teste, não recomendado em produção)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Executa a requisição cURL e armazena a resposta
$response = curl_exec($ch);

// Fecha a sessão cURL para liberar os recursos do sistema
curl_close($ch);    

// Decodifica a resposta JSON em um array associativo
$data = json_decode($response, true);

// Imprime o array resultante para verificar os dados retornados
print_r($data);
?>
