<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
  </head>
  <body>
  <nav class="titulo-home">
        <h1 class="titulo">Sistema de cadastro</h1>
  </nav> 
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
            case "home":
            include ("home.php");
            break;  
            
            //echo "<h1>Bem vindos !!</h1>";

      }
  ?>
   <script src="js/script.js"></script>
  </body>
</html>