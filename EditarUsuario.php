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
        <label for="nome">Nome:<span class="texto-menor"> (Obrigátorio)</span></label>
        <input type="text" id="nome" name="nome" value = "<?php echo $linha->nome; ?>" class="form-control" required>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="email">E-mail:</label>
                    <input type="email" placeholder="Digite seu e-mail" value= "<?php echo $linha->email; ?>" id="email" name="email" class="form-control">        
                </div>
                <div class="col-md-4">
                    <label for="data_nascimento">Data de nascimento: <span class="texto-menor"> (Obrigátorio)</span></label>
                    <input type="date" id="data_nascimento" value ="<?php echo $linha->data_nascimento; ?>" name="data_nascimento" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-6 mb-3 g-4">
        <label for="password">Senha: <span class="texto-menor"> (Obrigatório)</span> </label>
        <input type="password" placeholder="Escolha uma senha" id="password" name="senha" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="tel-1">Telefone:</label>
        <div class="input-group">
            <input type="tel" placeholder="Digite seu telefone" id="tel-1" name="tel-1" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="bi bi-whatsapp"></i>
                </span>
                <input type="checkbox" id="verificacao1" name="verificacao1" class="form-control-checkbox ml-2">
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="tel-2">Telefone Alternativo: <span class="texto-menor">(Opcional)</span></label>
        <div class="input-group">
            <input type="tel" placeholder="Digite seu telefone" id="tel-2" name="tel-2" class="form-control">
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="bi bi-whatsapp"></i>
                </span>
                <input type="checkbox" id="verificacao2" name="verificacao2" class="form-control-checkbox ml-2">
            </div>
        </div>
    </div>
    <div class="mx-auto">
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
    </div>
</div>
</form>
