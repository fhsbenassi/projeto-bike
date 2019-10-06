<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!-- CONTEUDO -->
<div class="main">
  <div class="container" id="container_cadastro">

    <div class="col-sm-4"></div>

    <div class="col-sm-4 panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Entrar</div>
      </div>     

      <div style="padding-top:30px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form method="post" action="controller/login-controller.php" id="loginform" class="form-horizontal" role="form">

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="E-mail">                                        
          </div>

          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="senha" placeholder="senha">
          </div>


          <!-- <br>-->
          <?php
          if($erro == 1){
            echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
          }elseif ($erro == 2) {
            echo '<font color="#FF0000">Volte breve</font>';
          } else{
            print("<br>");
          }
          ?>


          <div style="margin-top:10px" class="form-group">
            <!-- Button -->

            <div class="col-sm-4 controls"></div>
            <div class="col-sm-4 controls">
              <button id="Entrar" name="Entrar" class="btn btn-primary" type="Submit">Entrar</button>
              <!-- <a id="btn-fblogin" href="#" class="btn btn-primary">Entrar</a> -->
            </div>
            <div class="col-sm-4 controls"></div>

          </div>


          <div class="form-group">
            <div class="col-md-12 control">
              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                Não tem uma conta? 
                <a href="index.php">
                  Cadastre-se
                </a>
              </div>
            </div>
          </div>    
        </form>     



      </div>                     
    </div>

    <div class="col-sm-4"></div>

  </div>
</div>