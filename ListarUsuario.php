<h1>Listar Usuário</h1>
<?php
    $consulta_sql = "SELECT * FROM usuarios";
    
    $resultado = $config_banco->query($consulta_sql);
    
    $quantidade = $resultado->num_rows;

    if($quantidade > 0 ){
        echo "<table class='table table-hover table-striped table-bordered'>";
            echo "<tr>";
            echo "<th>ID </th>";
            echo "<th>Nome </th>";
            echo "<th>E-mail </th>";
            echo "<th>Data de nascimento </th>";
            echo "<th>Ações</th>";
        while($linha = $resultado->fetch_object()){
            echo "<tr>";
            echo "<td>".$linha->id."</td>";
            echo "<td>".$linha->nome."</td>";
            echo "<td>".$linha->email."</td>";
            echo "<td>".$linha->data_nascimento."</td>";
            echo "<td>
                    <button onclick=\"location.href='?page=editar&id=".$linha->id."';\" class='btn btn-success'> Editar </button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=" .$linha->id. "';}else{false;}\"class='btn btn-danger'> Excluir </button> 
                  </td>";
            echo "</tr>";      
        }       
        echo "</table>";
    }else{
        echo "<p class='alert alert-danger'>Não foram encontrados registros</p>";
    }
?>
