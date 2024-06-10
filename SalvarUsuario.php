<?php
    switch($_REQUEST["acao"])
    {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $tel1 = $_POST["tel1"];
            $verificacao1 = isset($_POST["verificacao1"]) ? 1 : 0;
            $tel2 = $_POST["tel2"];
            $verificacao2 = isset($_POST["verificacao2"]) ? 1 : 0;
            $cep = $_POST["cep"];
            $estado = $_POST["estado"];
            $cidade = $_POST["cidade"]; 
            $endereco = $_POST["endereco"];
            $bairro = $_POST["bairro"]; 
            $numero = $_POST["numero"];

            $inserir_banco = "INSERT INTO usuarios (nome, data_nascimento, email, senha, telefone, verificacao, telefone_alternativo, verificacao2, cep, estado, cidade, rua, bairro, numero) VALUES ('$nome', '$data_nascimento', '$email', '$senha', '$tel1', $verificacao1, '$tel2', $verificacao2, '$cep', '$estado', '$cidade', '$endereco', '$bairro', '$numero')"; 

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