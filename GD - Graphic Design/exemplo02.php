<?php 

// Tenta criar uma imagem a partir de um arquivo JPEG
$image = imagecreatefromjpeg("certificado.jpg");

// Aloca cores para o texto
$titleColor = imagecolorallocate($image, 0, 0, 0); // Preto
$gray = imagecolorallocate($image, 100, 100, 100); // Cinza

// Adiciona texto à imagem
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor); // Título
imagestring($image, 5, 440, 350, "Victoria Kamilly de Souza", $titleColor); // Nome
imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y H:i:s"), $titleColor); // Data e hora

// Define o tipo de conteúdo como JPEG
header("Content-type: image/jpeg");

// Gera e envia a imagem para o navegador
imagejpeg($image, "certificado-". date("Y-m-d") .".jpg");

// Libera a memória associada à imagem
imagedestroy($image);
?>
