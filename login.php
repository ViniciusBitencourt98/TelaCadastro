<?php $menu = 0; ?>
<div class="container-login">
    <div class="container-nome">
        <div class="container-nome-principal">SDCP</div>
        <div class="container-nome-secundario">Sistema de cadastro de pessoas</div>
    </div>
    <div class="container-login-input">
        <div class="container-login-gif"></div>
        <div class="container-bemvindo">
            <div class="container-nome-bemvindo">Bem vindo !</div>
            <div>SDCP - Sistema de cadastro de pessoas</div>
        </div>
        <div class="container-input">
            <form action="?page=salvar">
                <div>
                    <label for="user">Usuário:</label>
                    <input type="text" name="user" required>
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required>
                </div>
                <a href="">Esqueci a senha</a>
                <button type="submit" class="">Cadastrar</button>
            </form>
        </div>
    </div>
</div>