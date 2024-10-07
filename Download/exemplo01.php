<?php 

// URL da imagem que será baixada
$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png";

// Obtém o conteúdo da imagem a partir da URL
$content = file_get_contents($link);

// Faz o parsing da URL para extrair suas partes
$parse = parse_url($link);

// Extrai o nome do arquivo a partir do caminho da URL
$basename = basename($parse["path"]);

// Abre um arquivo local para escrita (ou cria um novo, se não existir)
$file = fopen($basename,"w+");

// Escreve o conteúdo baixado da imagem no arquivo local
fwrite($file, $content);

// Fecha o arquivo para liberar os recursos do sistema
fclose($file);
?>

<!-- Exibe a imagem que foi baixada -->
<img src="<?=$basename?>">
