<?php
    switch($_REQUEST["acao"])
    {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $inserir_banco = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')"; 

            $res = $config_banco->query($inserir_banco);

            if($res==true){                
                echo "<script>alert('Cadastro realizado com sucesso.');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script> alert('Cadastro não realizado, verifque os dados e tente novamente !.')";
                echo "<script> location.href='?page=listar';</script>";
            }
        break;
        case 'editar':
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $email = $_POST["email"];
            
            $inserir_banco = "UPDATE usuarios SET nome ='{$nome}', data_nascimento = '{$data_nascimento}', email = '{$email}' WHERE id = ".$_REQUEST["id"];

            $res = $config_banco->query($inserir_banco);
            if($res==true){                
                echo "<script>alert('Alteração realizada com sucesso.');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script> alert('Não foi possivel alterar, tente novamente.')";
                echo "<script> location.href='?page=listar';</script>";
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"]; 

            $res = $config_banco->query($sql);

            if($res==true){                
                echo "<script>alert('Exclusão realizada com sucesso.');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script> alert('Não foi possivel alterar, tente novamente.')";
                echo "<script> location.href='?page=listar';</script>";
            }


        break;

    }