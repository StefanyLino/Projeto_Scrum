<?php
$servername = "localhost:3306";
$username= "root";
$password ="";
$dbname = "banco";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

// Adiciona a coluna 'imagem' á tabela 'produtos' se ela não exibir
$sql = "SHOW COLUMNS FROM produtos LIKE 'imagem'";
$result = $conn->query($sql);
if($result->num_rows == 0) {
    $sql = "ALTER TABLE produtos ADD COLUMN imagem VARCHAR(225)";
    $conn->query($sql);
}

// Adiciona a coluna 'imagem' á tabela 'fornecedor' se ela não exibir
$sql = "SHOW COLUMNS FROM fornecedores  LIKE 'imagem'";
$result = $conn->query($sql);
if($result->num_rows == 0){
    $sql = "ALTER TABLE fornecedores ADD COLUMN imagem VARCHAR(225)";
    $conn->query($sql);
}
?>