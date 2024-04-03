<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  
    <title>Cadastro de usuários</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cadastro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar Usuários</a>
      </li>
    </ul>
  </div>
</nav> 
  
  <div class="container">
    <div class="row">
      <div class="col mt-5">
      <?php
      include("config.php");
      switch(@$_REQUEST["page"])
      {
          case "novo":
            include("Novousuario.php");
           break;
          case "listar":
            include("ListarUsuario.php"); 
            break;
            case "salvar":
            include ("SalvarUsuario.php");
            break;
            case "editar":
            include ("EditarUsuario.php");
            break;
            default;
              echo "<h1>Bem vindos !!</h1>";

      }
  ?>
      </div>
    </div>
  </div>
    <script src="js/bootstrap.bundle.min.js" ></script>  
    <script>
    $(document).ready(function(){
        $('#tel-1').mask('(00) 00000-0000');
        $('#tel-2').mask('(00) 00000-0000');
    });
</script>

  </body>
</html>