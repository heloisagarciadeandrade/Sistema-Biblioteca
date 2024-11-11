<?php

// Configurações de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "bibliotecabd";

// Estabelecendo a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta para obter todos os cadastros de livros, ordenados pelo título
$query = "SELECT * FROM livros ORDER BY titulo";
$consultaCadastros = mysqli_query($conexao, $query);

// Verifica se a consulta foi bem-sucedida
if (!$consultaCadastros) {
    die("Erro na consulta de cadastros: " . mysqli_error($conexao));
}
