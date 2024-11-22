<?php

include 'db.php';  // Incluindo a conexão com o banco de dados

// Recebe os dados do formulário
$id = $_POST['id'];
$tempo = $_POST['receita'];  // Campo 'tempo'
$receita = $_POST['receita'];  // Campo 'receita'
$ingrediente = $_POST['ingrediente$ingrediente'];    // Campo 'ingrediente$ingrediente'
$modo = $_POST['modo'];  // Campo 'modo' - novo campo
$status_disponibilidade = $_POST['status_disponibilidade']; // Campo 'status_disponibilidade' 

// Atualiza tabela 'pacientes'
$query = "UPDATE Receita 
          SET receita='$receita', tempo='$tempo' , ingrediente$ingrediente='$ingrediente', modo='$modo', status_disponibilidade='$status_disponibilidade' 
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
