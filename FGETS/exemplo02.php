<?php 

// Define o nome do arquivo que será convertido para base64
$filename = "TLOU_serie.png";

// Cria uma nova instância da classe finfo para determinar o tipo MIME do arquivo
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// Verifica se o arquivo existe; se não, encerra a execução do script com uma mensagem de erro
if (!file_exists($filename)) {
    die("Arquivo não encontrado: $filename");
}

// Obtém o tipo MIME do arquivo (por exemplo, image/png)
$mimetype = $fileinfo->file($filename);

// Lê o conteúdo do arquivo e o codifica em base64
$base64 = base64_encode(file_get_contents($filename));

// Monta a string de dados que representa a imagem em base64, incluindo o tipo MIME
$base64encode = "data:". $mimetype . ";base64," . $base64;

?>

<!-- Cria um link para abrir a imagem em uma nova aba -->
<a href="<?=$base64encode?>" target="_blank"> Link para imagem</a>

<!-- Exibe a imagem diretamente na página utilizando a string base64 -->
<img src="<?=$base64encode?>">
