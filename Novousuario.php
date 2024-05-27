<div class= "titulo-page">
    <div class = "titulo-page-logo">
    <a href="?page=index.php">Home</br><img src="image/botao-home.png" alt="Icone de ir para home"></a>
    <a href="?page=listar">Listar</br><img src="image/listar.png" alt="Icone de listar usuários"></a> 
    </div>
    <h1>Novo Usuário</h1>
</div>
<form action="?page=salvar" method="POST" class="form">
    <input type="hidden" name="acao" value="cadastrar">
   <div class="form">
        <fieldset class = "form1">
            <legend>Dados pessoais</legend>
            <div class="form-pl">
                <div>
                    <label for="nome">Nome:<span class="texto-menor">(Obrigátorio)</span></label></br>
                    <input type="text" placeholder="Digite seu nome completo" id="nome" name="nome" class="form-control" required>
                </div>
            </div>
            <div class="form-pl">    
                <div>
                    <label for="data_nascimento">Data de nascimento: <span class="texto-menor"> (Obrigátorio)</span></label></br>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div>
                    <label for="tel-1">Telefone:</label></br>
                    <input type="tel" placeholder="Digite seu telefone" id="tel-1" name="tel-1"></br>
                    <input type="checkbox" id="verificacao1" name="verificacao1">
                    <span class="">(Marque, se WhatsApp)</span>
                </div>
                <div>
                    <label for="tel-2">Telefone Alternativo: <span class="texto-menor">(Opcional)</span></label></br>
                    <input type="tel" placeholder="Digite seu telefone" id="tel-2" name="tel-2"></br>
                    <input type="checkbox" id="verificacao2" name="verificacao2">
                    <span class="texto-menor">(Marque, se WhatsApp)</span>
                </div>
            </div>
            <div class="form-pl">
                <div>
                    <label for="email">E-mail:<span class="texto-menor"> (Obrigátorio)</span></label>
                    <input type="email" placeholder="Digite seu e-mail" id="email" name="email" class="form-control">     
                </div>
                <div>
                    <label for="password">Senha: <span class="texto-menor"> (Obrigatório)</span> </label>
                    <input type="password" placeholder="Escolha uma senha" id="password" name="senha" class="form-control" required>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="mx-auto text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg">Cadastrar</button>
    </div>
</form>
