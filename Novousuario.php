<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome: *</label>
        <input type="text" placeholder="Digite seu nome completo" id="nome" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento">Data de nascimento: *
        <input type="date" id ="data_nascimento" name="data_nascimento" class="form-control" required>
        </label>    
    </div>
    <div class="mb-3">
        <label for="email">E-mail:</label>
        <input type="email" placeholder="Digite seu e-mail" id="email" name="email" class="form-control">        
    </div>
    <div class="mb-3">
        <label for="password">Senha:</label>
        <input type="password" placeholder="Escolha uma senha" id="password" name="senha" class="form-control" >
    </div>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   Os campos que possuem "*" são campos obrigatorios
  </div>
</div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </div>
</form>
