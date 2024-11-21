<?php

include 'db.php';

$nome = $_POST['nome'];
$doenca = $_POST['doenca'];
$tratamento = $_POST['tratamento'];
$status_disponibilidade = $_POST['status_disponibilidade'];

$query = "INSERT INTO pacientes (nome, doenca, tratamento, status_disponibilidade) 
VALUES ('$nome', '$doenca', '$tratamento', '$status_disponibilidade')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');
