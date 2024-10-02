<?php 
//manipulando arquivos
//escaneando o diretorio
$images = scandir("images");

//var_dump($images);

//validando o diretorio e adicionando scan com mais informações
$data = array();

    foreach ($images as $img) {
        if (!in_array($img, array(".",".."))) {
            $filename = "images" . DIRECTORY_SEPARATOR . $img;
            $info = pathinfo($filename);
            $info["size"] = filesize($filename);
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            $info["url"] = "http://localhost/DIR/".str_replace("\\", "/",$filename );

            var_dump($info);

            array_push($data, $info);
    }
}

echo json_encode($data);
?>