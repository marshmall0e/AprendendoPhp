

<!--
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">

    <button type="submit">Send</button>
</form>


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["fileUpload"];
    if ($file["error"]) {
        throw new Exception("Error: ". $file["error"]);
    }

    $dirUploads = "uploads";
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $filename)) {
        echo "Upload realizado com sucesso!";

    } else {
        throw new Exception("Não foi possivel realizar o upload.");
    }


}-->

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">

    <button type="submit">Send</button>
</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"];
    if ($file["error"]) {
        throw new Exception("Error: " . $file["error"]);
    }

    $dirUploads = "uploads";
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    // Obter o nome do arquivo
    $filename = basename($file["name"]);

    // Mover o arquivo para o diretório especificado
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $filename)) {
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possível realizar o upload.");
    }
}

?>


