<?php 

// Tenta criar uma imagem a partir de um arquivo JPEG
$image = imagecreatefromjpeg("certificado.jpg");

// Aloca cores para o texto
$titleColor = imagecolorallocate($image, 0, 0, 0); // Preto
$gray = imagecolorallocate($image, 100, 100, 100); // Cinza

// Adiciona texto à imagem
imagettftext($image, 26, 0,90, 250, $titleColor, "fonts". DIRECTORY_SEPARATOR. "Bevan" . DIRECTORY_SEPARATOR. "Bevan-Regular.ttf", "CERTIFICADO DE MELHOR NAMORADA"); // Título

imagettftext($image, 32, 0,220, 350, $titleColor, "fonts". DIRECTORY_SEPARATOR. "Playball" . DIRECTORY_SEPARATOR. "Playball-Regular.ttf","Mariany Cristine Pereira De Brito"); // Nome

imagestring($image, 32, 350, 370, "Concluido em: " . date("d/m/Y H:i:s"), $titleColor); // Data e hora

// Define o tipo de conteúdo como JPEG
header("Content-type: image/jpeg");

// Gera e envia a imagem para o navegador
imagejpeg($image);

// Libera a memória associada à imagem
imagedestroy($image);
?>
