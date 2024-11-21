<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];  // Campo 'nome'
$doenca = $_POST['doenca'];    // Campo 'doenca'
$tratamento = $_POST['tratamento'];  // Campo 'tratamento' - novo campo
$status_disponibilidade = $_POST['status_disponibilidade']; // Campo 'status_disponibilidade' 

// Atualiza tabela 'pacientes'
$query = "UPDATE pacientes 
          SET nome='$nome', doenca='$doenca', tratamento='$tratamento', status_disponibilidade='$status_disponibilidade' 
          WHERE id=$id";

// Executa a consulta
if (mysqli_query($conexao, $query)) {
    // Redireciona para a página de cadastros após o sucesso
    header('Location: index.php?pagina=cadastros');
} else {
    // Caso ocorra um erro, exibe a mensagem
    echo "Erro ao atualizar o livro: " . mysqli_error($conexao);
}
?>
