<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $id) {
?>

<br>
<div class="caixa">
    <h4>Editar Receitas</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id']; ?>" type="hidden" id="id" name="id">
        
        <div class="mb-3">
            <label for="receita" class="form-label"> Receita</label>
            <input value="<?php echo $linha['receita']; ?>" type="text" class="form-control" id="receita" name="receita" required>
        </div>
        
        <div class="mb-3">
            <label for="ingrediente" class="form-label">Ingredientes</label>
            <input value="<?php echo $linha['ingrediente']; ?>" type="text" class="form-control" id="ingrediente" name="ingrediente" required>
        </div>
        
        <div class="mb-3">
            <label for="modo" class="form-label">Modo</label>
            <input value="<?php echo $linha['modo']; ?>" type="text" class="form-control" id="modo" name="modo" required>
        </div>

        <div class="mb-3">
            <label for="tempo" class="form-label">Tempo</label>
            <input value="<?php echo $linha['tempo']; ?>" type="text" class="form-control" id="tempo" name="tempo" required>
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
