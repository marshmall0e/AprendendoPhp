<?php 
// Nota: É recomendado deixar o header no final do script. Se houver um erro antes, 
// o header pode impedir a exibição correta da saída.

header("Content-Type: image/png"); // Define o tipo de conteúdo da resposta como PNG

// Cria uma nova imagem com largura e altura de 256 pixels
$image = imagecreate(256, 256);

// Aloca a cor preta para a imagem (RGB: 0, 0, 0)
$black = imagecolorallocate($image, 0, 0, 0);

// Aloca a cor vermelha para a imagem (RGB: 255, 0, 0)
$red = imagecolorallocate($image, 255, 0, 0);

// Adiciona um texto à imagem: "Curso PHP 7"
// Parâmetros: imagem, tamanho da fonte, posição X, posição Y, texto, cor do texto
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

// Gera a imagem PNG e envia para o navegador
imagepng($image);

// Libera a memória associada à imagem
imagedestroy($image);
?>
