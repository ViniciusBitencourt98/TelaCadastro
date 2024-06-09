<div class= "titulo-page">
    <div class = "titulo-page-logo">
    <a href="?page=index.php">Home</br><img src="image/botao-home.png" alt="Icone de ir para home"></a>
    <a href="?page=listar">Listar</br><img src="image/listar.png" alt="Icone de listar usuários"></a> 
    </div>
    <h1>Editar Usuário</h1>
</div>

<?php
    $consulta_banco = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $resultado = $config_banco->query($consulta_banco);
    $linha = $resultado->fetch_object();
?>

<form action="?page=salvar" method="POST" class="form">
    <input type="hidden" name="acao" value= "editar">
    <input type="hidden" name="id" value=" <?php echo $linha->id; ?>">
    <div class="form">
        <fieldset class = "form1">
            <legend>Dados pessoais</legend>
            <div class="form-pl">
                <div class="form-control wrap-input-5">
                    <label for="nome">Nome:<span class="texto-menor">(Obrigátorio)</span></label>
                    <input type="text" id="nome" name="nome" value=" <?php echo $linha->nome; ?>" required>
                </div>
            </div>
            <div class="form-sl">    
                <div class="form-control">
                    <label for="tel-1">Telefone:</label>
                    <input type="tel" id="tel-1" name="tel-1">
                    <div>
                        <input type="checkbox" id="verificacao1" name="verificacao1">
                        <span class="">(Marque, se WhatsApp)</span>
                    </div>    
                </div>
                <div class="form-control">
                    <label for="tel-2">Telefone Alternativo: <span class="texto-menor">(Opcional)</span></label>
                    <input type="tel"  id="tel-2" name="tel-2">
                    <div>
                        <input type="checkbox" id="verificacao2" name="verificacao2">
                        <span class="texto-menor">(Marque, se WhatsApp)</span>
                    </div>
                </div>
                <div class="form-control">
                    <label for="data_nascimento">Data de nascimento: <span class="texto-menor"> (Obrigátorio)</span></label>
                    <input type="date" id="data_nascimento" name="data_nascimento" value= "<?php echo $linha->data_nascimento; ?>" required>
                </div>
            </div>
            <div class="form-sl">
                <div class="form-control">
                    <label for="email">E-mail:<span class="texto-menor"> (Obrigátorio)</span></label>
                    <input type="email" id="email" name="email" value= "<?php echo $linha->email; ?>">     
                </div>
                <div class="form-control">
                    <label for="password">Senha: <span class="texto-menor"> (Obrigatório)</span> </label>
                    <input type="password" id="password" name="senha"required>
                </div>
            </div>
        </fieldset>
        <fieldset class = "form2">
            <legend>Endereço</legend>
            <div class= "form-xl">
                <div>
                    <label for="cep">CEP:<span class="texto-menor"> (Obrigátorio)</span></label>
                    <input  type="text" id="cep" name="cep" onblur="buscaCEP(this.value)"  required>
                    <a class="texto-menor" href="https://buscacepinter.correios.com.br/app/endereco/index.php" target="_blank"> Não sabe seu CEP ?</a>
                </div>
                <div>
                    <label for="estado">Estado:</label>
                    <input  type="text"  id="estado" name="estado" >
                </div>
                <div>
                    <label for="cidade">Cidade:</label>
                    <input  type="text"  id="cidade" name="cidade" >
                </div>
            </div>
            <div class= "form-xl">
                <div>
                    <label for="endereco">Rua/Logradouro:</span></label>
                    <input  type="text" id="endereco" name="endereco">
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input  type="text"id="bairro" name="bairro" >
                </div>
                <div>
                    <label for="numero">Nº:</label>
                    <input  type="text"  id="numero" name="numero" >
                </div>
            </div>
        </fieldset>
    </div>
    <div>
        <button type="submit" class="btn-shaketext"><span>Salvar alterações</span></button>
    </div>
</form>
