<?php

include 'db.php';

$tempo = $_POST['tempo'];  // Adicionei o ponto e vírgula aqui
$receita = $_POST['receita'];
$ingrediente = $_POST['ingrediente'];  // Corrigi a chave de $_POST
$modo = $_POST['modo'];  // Corrigi a chave de $_POST
$status_disponibilidade = $_POST['status_disponibilidade'];

// Corrigi o SQL, removendo as variáveis concatenadas na definição das colunas
$query = "INSERT INTO Receita (receita, ingrediente, modo, status_disponibilidade, tempo) 
VALUES ('$receita', '$ingrediente', '$modo', '$status_disponibilidade', '$tempo')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
?>

