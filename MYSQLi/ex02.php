<?php
//PDO

$conn = new PDO("mysql:dbname=dbphp8;host=localhost","root", "",);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key."</strong>".$value."<br>";
    }
    echo "=========================================<br>";
}


//para conectar no SQL server
/* $conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS","root", "",pooling=0); */
?>