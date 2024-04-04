<h1 class="text-center">Novo Usuário</h1>

<form action="?page=salvar" method="POST" class="form">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome:<span class="texto-menor"> (Obrigátorio)</span></label>
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
                    <label for="data_nascimento">Data de nascimento: <span class="texto-menor"> (Obrigátorio)</span></label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
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
    </div>
    <div class="input-group mt-2">
        <span class="input-group-text">
            <i class="bi bi-whatsapp"></i>
        </span>
        <input type="checkbox" id="verificacao1" name="verificacao1" class="form-control-checkbox ml-2 mr-2">
        <span class="texto-menor">(Marque, se WhatsApp)</span>
    </div>
</div>
<div class="col-md-3 mb-3">
    <label for="tel-2">Telefone Alternativo: <span class="texto-menor">(Opcional)</span></label>
    <div class="input-group">
        <input type="tel" placeholder="Digite seu telefone" id="tel-2" name="tel-2" class="form-control">
    </div>
    <div class="input-group mt-2">
        <span class="input-group-text">
            <i class="bi bi-whatsapp"></i>
        </span>
        <input type="checkbox" id="verificacao2" name="verificacao2" class="form-control-checkbox ml-2 mr-2">
        <span class="texto-menor">(Marque, se WhatsApp)</span>
    </div>
</div>
</div>
    <div class="mx-auto text-center">
        <button type="submit" class="btn btn-outline-primary btn-lg">Cadastrar</button>
    </div>
</form>
