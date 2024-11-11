<?php

include 'db.php';

$id = $_POST['id'];

$query = "delete from livros where id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');