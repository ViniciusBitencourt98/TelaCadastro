<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Cadastro</title>
</head>

<body>
  <?php if (isset($meu) && $menu == '1') { ?>
    <nav class="titulo-home">
      <h1 class="titulo">Sistema de cadastro</h1>
    </nav>
  <?php }
  include("config.php");

  // Verifica se o usuário está logado
  session_start();
  if(isset($_REQUEST["acao"])){
    $_SESSION['logando'] = 1;
  } else{
    $_SESSION['logado'] = 0;
  }
  if (isset($_SESSION['logando'])) {
    if($_SESSION['logado'] == 1)
    // Define a página atual ou usa "home" como padrão
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "login";

    switch ($page) {
      case "novo":
        include("Novousuario.php");
        break;
      case "listar":
        include("ListarUsuario.php");
        break;
      case "salvar":
        include("SalvarUsuario.php");
        break;
      case "editar":
        include("EditarUsuario.php");
        break;
      case "home":
      default:
        include("login.php");
        break;
    }
  } else {
    // Evita o loop infinito ao verificar se já está na página de login
    if (!isset($_REQUEST["page"]) || $_REQUEST["page"] != "login") {
      echo "<script>
              alert('É necessário logar no sistema.');
              window.location.href='?page=login';
            </script>";
    } else {
      include("login.php");
    }
  }
  ?>
  <script src="js/script.js"></script>
</body>

</html>