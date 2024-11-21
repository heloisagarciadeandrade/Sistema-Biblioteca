<?php

include 'db.php';

$id = $_POST['id'];

$query = "delete from pacientes where id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');