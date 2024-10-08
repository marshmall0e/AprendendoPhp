<?php 

// Define o tipo de conteúdo da resposta como imagem JPEG
header("Content-type: image/jpeg");

// Nome do arquivo da imagem original
$file = "wallpaper.jpg";

// Define a nova largura e altura para a imagem redimensionada
$new_width = 256; // Largura desejada
$new_height = 256; // Altura desejada

// Obtém informações sobre a imagem original (largura, altura, tipo, etc.)
$data = getimagesize($file);

// Armazena a largura e altura originais da imagem
$width = $data[0]; // Largura original
$height = $data[1]; // Altura original

// Alternativamente, pode-se usar a função list para atribuir valores
list($old_width, $old_height) = getimagesize($file); // Largura e altura originais

// Cria uma nova imagem verdadeira (com verdadeiras cores)
$new_image = imagecreatetruecolor($new_width, $new_height);

// Cria uma imagem a partir do arquivo JPEG original
$old_image = imagecreatefromjpeg($file);

// Redimensiona a imagem original e copia para a nova imagem
// Parâmetros: nova imagem, imagem original, posição X, posição Y na nova imagem, 
// posição X, posição Y na imagem original, nova largura, nova altura, largura original, altura original
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

// Gera a nova imagem JPEG e a envia para o navegador
imagejpeg($new_image);

// Libera a memória associada à imagem original e à nova imagem
imagedestroy($old_image); // Destrói a imagem original
imagedestroy($new_image); // Destrói a nova imagem redimensionada

?>
