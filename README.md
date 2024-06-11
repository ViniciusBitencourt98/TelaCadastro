# CRUD de Usuários

Este é um projeto simples de CRUD (Create, Read, Update, Delete) de usuários, desenvolvido em PHP e MySQL. O projeto permite cadastrar, listar, editar e excluir usuários, além de funcionalidades adicionais como preenchimento automático de endereço com base no CEP.

## Visão Geral

O objetivo deste projeto é demonstrar um sistema básico de gerenciamento de usuários utilizando PHP para o backend e MySQL para o banco de dados. O projeto inclui:

- Cadastro de novos usuários.
- Listagem de usuários.
- Edição de usuários existentes.
- Exclusão de usuários.
- Preenchimento automático de endereço através da API ViaCEP.
- Validação e formatação de campos (CEP, telefone, etc).

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## Configuração

### Pré-requisitos

- PHP instalado
- MySQL instalado
- Servidor Apache (recomendado XAMPP para ambiente de desenvolvimento)

### Passo a Passo

1. Clone este repositório para o seu diretório de projetos:
    ```sh
    git clone https://github.com/ViniciusBitencourt98/TelaCadastro.git
    ```

2. Navegue até o diretório do projeto:
    ```sh
    cd nome-do-repositorio [Este é o nome da pasta ou diretório onde o seu projeto foi clonado ou armazenado.]
    ```
3. Inicie o servidor Apache e MySQL pelo XAMPP.

4. Crie o banco de dados automaticamente e após seja direcionado para a página inicial acessando o seguinte link no seu navegador:
    ```sh
    http://localhost/nome-do-repositorio/create_database.php
    ```

5. Acesse o projeto pelo navegador:
    ```sh
    http://localhost/index.php
    ```

## Funcionalidades

- **Cadastro de Usuário:**
  - Acesse a página de cadastro e preencha o formulário.
    ![image](https://github.com/ViniciusBitencourt98/TelaCadastro/assets/93064287/d1766ff1-8ea2-4622-a64d-075788016ae4)

  - O endereço é preenchido automaticamente ao informar o CEP.
  ![Cadastro-Google-Chrome-2024-06-10-16-57-58](https://github.com/ViniciusBitencourt98/TelaCadastro/assets/93064287/3a538c19-7327-4fe7-ae60-9fa274091b22)



- **Listagem de Usuários:**
  - Veja a lista completa de usuários cadastrados.
  - Ações de editar e excluir estão disponíveis.
  ![image](https://github.com/ViniciusBitencourt98/TelaCadastro/assets/93064287/5e93d9c6-d4f8-4388-9c56-f991385c467a)


- **Edição de Usuário:**
  - Edite os dados de um usuário existente.
  ![image](https://github.com/ViniciusBitencourt98/TelaCadastro/assets/93064287/47b50acb-c495-451e-9a7c-48f1fc375d78)


- **Exclusão de Usuário:**
  - Exclua um usuário da lista.
  ![image](https://github.com/ViniciusBitencourt98/TelaCadastro/assets/93064287/7756a506-2f5f-43ea-a693-a18026d31d2e)


## Estrutura do Projeto

- `index.php`: Ponto de entrada principal do projeto.
- `config.php`: Configurações de conexão com o banco de dados.
- `Novousuario.php`: Página de cadastro de novos usuários.
- `ListarUsuario.php`: Página de listagem de usuários.
- `SalvarUsuario.php`: Script para salvar os dados dos usuários no banco de dados.
- `EditarUsuario.php`: Página para edição de usuários.
- `create_database.php`: Script para criar o banco de dados e tabelas automaticamente.
- `js/script.js`: Arquivo JavaScript para manipulações do DOM e integração com a API ViaCEP.
- `css/style.css`: Estilos CSS para o projeto.

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`).
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin feature/nova-feature`).
5. Abra um Pull Request.


## Contato

- Vinicius Bitencourt Assis
- [viniciusbitencourt1998@outlook.com](mailto:viniciusbitencourt1998@outlook.com)
- [github.com/ViniciusBitencourt98](https://github.com/ViniciusBitencourt98)

