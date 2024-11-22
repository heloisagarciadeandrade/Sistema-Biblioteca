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
            <label for="nome" class="form-label">Nome</label>
            <input value="<?php echo $linha['nome']; ?>" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="mb-3">
            <label for="doenca" class="form-label">Doença</label>
            <input value="<?php echo $linha['doenca']; ?>" type="text" class="form-control" id="doenca" name="doenca" required>
        </div>
        
        <div class="mb-3">
            <label for="tratamento" class="form-label">Tratamento</label>
            <input value="<?php echo $linha['tratamento']; ?>" type="text" class="form-control" id="tratamento" name="tratamento" required>
        </div>
        
        <div class="mb-3">
            <label for="status_disponibilidade" class="form-label">Medicamento </label>
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
