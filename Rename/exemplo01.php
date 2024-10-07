<?php 

// Define os nomes dos diretórios que serão criados
$dir1 = "folder_01"; // Primeiro diretório
$dir2 = "folder_02"; // Segundo diretório

// Verifica se o diretório $dir1 existe; se não existir, cria-o
if (!is_dir($dir1)) mkdir($dir1);

// Verifica se o diretório $dir2 existe; se não existir, cria-o
if (!is_dir($dir2)) mkdir($dir2);

// Nome do arquivo que será criado
$filename = "README.txt";

// Verifica se o arquivo README.txt não existe no diretório $dir1
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    // Abre ou cria o arquivo README.txt para escrita
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    // Escreve a data e hora atuais no arquivo
    fwrite($file, date("Y-m-d H:i:s"));

    // Fecha o arquivo para garantir que os dados sejam salvos
    fclose($file);
} 

// Renomeia (move) o arquivo README.txt do diretório $dir1 para o diretório $dir2
rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename, // Origem: caminho do arquivo no diretório $dir1
    $dir2 . DIRECTORY_SEPARATOR . $filename  // Destino: caminho onde o arquivo será movido em $dir2
);

// Exibe uma mensagem informando que o arquivo foi movido com sucesso
echo "Arquivo movido com sucesso!";

?>
