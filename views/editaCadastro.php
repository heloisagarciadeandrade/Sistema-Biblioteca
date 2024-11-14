<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $id) {
?>

<br>
<div class="caixa">
    <h4>Cadastro doenças crônicas</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input value="<?php echo $linha['titulo']; ?>" type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input value="<?php echo $linha['autor']; ?>" type="text" class="form-control" id="autor" name="autor" required>
        </div>
        
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <input value="<?php echo $linha['genero']; ?>" type="text" class="form-control" id="genero" name="genero" required>
        </div>
        
        <div class="mb-3">
            <label for="status_disponibilidade" class="form-label">Status de Disponibilidade</label>
            <select class="form-control" id="status_disponibilidade" name="status_disponibilidade" required>
                <option value="disponível" <?php echo ($linha['status_disponibilidade'] == 'disponível') ? 'selected' : ''; ?>>Disponível</option>
                <option value="indisponível" <?php echo ($linha['status_disponibilidade'] == 'indisponível') ? 'selected' : ''; ?>>Indisponível</option>
            </select>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   
</div>
<br><br>

<?php
    }
}
?>
