<style>
        .modal {
  display: none; /* Esconder o modal por padrão */
  position: fixed; /* Fixar o modal na tela */
  z-index: 1; /* Garantir que o modal fique acima de outros elementos */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; /* Permitir rolagem se o conteúdo for muito grande */
  background-color: rgba(0,0,0,0.4); /* Fundo escurecido */
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>



  <button id="openModal">Abrir Modal</button>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Nome: <span id="nome"></span></p>
      <p>Telefone: <span id="telefone"></span></p>
      <p>Telefone Alternativo: <span id="telefoneAlternativo"></span></p>
      <p>Data de Nascimento: <span id="dataNascimento"></span></p>
      <p>CEP: <span id="cep"></span></p>
      <p>Estado: <span id="estado"></span></p>
      <p>Cidade: <span id="cidade"></span></p>
    </div>
  </div>

  <script>

  </script>
