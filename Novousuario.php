<h1 class="text-center">Novo Usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome: *</label>
        <input type="text" placeholder="Digite seu nome completo" id="nome" name="nome" class="form-control" required>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="email">E-mail:</label>
                    <input type="email" placeholder="Digite seu e-mail" id="email" name="email" class="form-control">        
                </div>
                <div class="col-md-4">
                    <label for="data_nascimento">Data de nascimento: *</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password">Senha: </label>
            <input type="password" placeholder="Escolha uma senha" id="password" name="senha" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label for="tel-1">Telefone:</label>
            <input type="tel" placeholder="Escolha uma senha" id="tel-1" name="tel-1" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label for="tel-2">Telefone 2:</label>
            <input type="tel" placeholder="Escolha uma senha" id="tel-2" name="tel-2" class="form-control">
        </div>
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
