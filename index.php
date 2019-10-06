

<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<?php 
session_start();
include("head.php"); ?>

<body>

  <?php require_once 'config.php'; ?>

  <!-- BARRA DE NAVEGACAO -->
  <?php include("navbar.php");

  //var_dump($_SESSION);
  //exit("parou aqui");

    # Conteúdo da página
  if(isset($_SESSION['id_usuario'])){    
    $pagina = 'home-page';

    if (isset($_GET['pagina'])){
      $escolha = ($_GET['pagina']);
      // echo($escolha);
      // exit();
      // unset($pagina);
      $pagina = $escolha;
    }

    // if (isset($_GET['pagina'])=='cad-contratante'){
    //   unset($pagina);
    //   $pagina = 'cad-contratante';
    // }elseif (isset($_GET['pagina'])=='cad-entregador'){
    //   unset($pagina);
    //   $pagina = 'cad-entregador';
    // } 


  }
  else{
    if(isset($_GET['pagina'])){
      $pagina = $_GET['pagina'];  
    }
    else{
      $pagina = 'home';
    }       
  }

  switch($pagina){
    case 'cad-contratante': include 'view/contratante-cad-view.php'; break;
    case 'cad-entregador': include 'view/entregador-cad-view.php'; break;
    case 'remessa-view': include 'view/remessa-view.php'; break;
    case 'candidatos': include 'view/lista-candidatos-view.php'; break;
    case 'login': include 'view/login-view.php'; break;
    case 'home-page': include 'view/home-page.php'; break;
    default: include 'view/home.php'; break;
  }

    //RODAPE 
  include("footer.php"); ?>

</body>
</html>