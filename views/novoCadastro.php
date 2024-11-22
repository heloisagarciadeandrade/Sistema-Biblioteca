<br>
<div class="caixa">
    <h4>Novo Cadastro de Receitas</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="receita" class="form-label">Paciente</label>
            <input type="text" class="form-control" id="receita" name="receita" required>
        </div>
        
        <div class="mb-3">
            <label for="ingrediente" class="form-label">Ingredientes</label>
            <input type="text" class="form-control" id="ingrediente" name="ingrediente" required>
        </div>
        
        <div class="mb-3">
            <label for="modo" class="form-label">Modo</label>
            <input type="text" class="form-control" id="modo" name="modo" required>
        </div>
        
        <div class="mb-3">
            <label for="tempo" class="form-label">Tempo</label>
            <input type="text" class="form-control" id="tempo" name="tempo" required>
        </div>
       
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>   
</div>
<br><br>
