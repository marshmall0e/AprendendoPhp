<?php 

$filename = "usuarios.csv";

if (file_exists($filename)) {
    $file = fopen($filename, "r");

    // Ler os cabeçalhos e remover espaços
    $headers = array_map('trim', explode(",", fgets($file)));

    $data = array();

    while ($row = fgets($file)) {
        // Dividir a linha e remover espaços
        $rowData = array_map('trim', explode(",", $row));
        $linha = array();

        // Verifique se o número de colunas corresponde aos cabeçalhos
        for ($i = 0; $i < count($headers); $i++) {
            if (isset($rowData[$i])) {
                $linha[$headers[$i]] = $rowData[$i];
            } else {
                $linha[$headers[$i]] = null; // Para evitar o "undefined index"
            }
        }

        array_push($data, $linha);
    }

    fclose($file);  
    echo json_encode($data);
} else {
    echo json_encode(array("error" => "File not found"));
}
?>


<!-- $filename = "usuarios.csv";

if (file_exists($filename)) {
    $file = fopen($filename,"r");

    $headers = explode(",", fgets($file));

    $data = array();

    while ($row = fgets($file)) {   
       $rowData = explode(",",$row);
       $linha = array();
       for ($i = 0; $i < count($headers); $i++) {
            $linha[$headers[$i]] = $rowData[$headers[$i]];
       }

       array_push($data, $linha);
    }


}
fclose($file);  

echo json_encode($data); -->