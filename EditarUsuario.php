<h1 class="text-center">Editar Usuário</h1>

<?php
    $consulta_banco = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $resultado = $config_banco->query($consulta_banco);
    $linha = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value= "editar">
    <input type="hidden" name="id" value=" <?php echo $linha->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome: *</label>
        <input type="text" id="nome" name="nome" value = "<?php echo $linha->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento">Data de nascimento: *
        <input type="date" id ="data_nascimento" name="data_nascimento" value = "<?php echo $linha->data_nascimento; ?>" class="form-control" required>
        </label>
        
    </div>
    <div class="mb-3">
        <label for="email">E-mail:</label>
        <input type="email"  id="email" name="email" value = "<?php echo $linha->email; ?>" class="form-control">        
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    </div>
</form>
