<!-- CONTEUDO -->

<div class="main">
  <div class="container" id="container_cadastro">

    <form method="post" action="controller/contratante-controller.php" id="form" name="form" class="form-horizontal">
      <fieldset>
        <div class="panel panel-info">
          <div class="panel-heading">Cadastro de Contratante</div>

          <div class="panel-body">
            <div class="form-group">

              <div class="col-md-11 control-label">
                <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
              <div class="col-md-8">
                <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text" value="<?php if(isset($_POST['nome'])){echo($_POST['nome']);}?>">
              </div>
            </div>

              <!-- <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>

               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
                <div class="col-md-8">
                  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                </div>
              </div> -->               

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="nome">CPF / CNPJ <h11>*</h11></label>  
                <div class="col-md-2">
                  <input id="identidade" name="identidade" placeholder="Apenas números" class="form-control input-md" required="" type="text" pattern="[0-9]+$" value="<?php if(isset($_POST['identidade'])){echo($_POST['identidade']);}?>">
                </div>

                <label class="col-md-1 control-label" for="nome">Nascimento<h11>*</h11></label>  
                <div class="col-md-2">
                  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" value="<?php if(isset($_POST['dtnasc'])){echo($_POST['dtnasc']);}?>"> <!-- removido  onBlur="showhide()" -->
                </div>




                <!-- Multiple Radios (inline) -->

                <label class="col-md-1 control-label" for="radios">Pessoa <h11>*</h11></label>
                <div class="col-md-4"> 
                  <label required="" class="radio-inline" for="radios-0" >
                    <input name="pessoa" id="pessoa" value="1" type="radio" required>
                    Física
                  </label> 
                  <label class="radio-inline" for="radios-1">
                    <input name="pessoa" id="pessoa" value="2" type="radio">
                    Jurídica
                  </label>
                </div>
              </div>




              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="celular">Celular <h11>*</h11></label>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="celular" name="celular" class="form-control" placeholder="Apenas numeros" required="" type="text" maxlength="13" minlength="10" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('###########', this)" value="<?php if(isset($_POST['celular'])){echo($_POST['celular']);}?>">
                  </div>
                </div>

                <label class="col-md-1 control-label" for="fixo">Telefone</label>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="fixo" name="fixo" class="form-control" placeholder="Apenas numeros" type="text" maxlength="13" minlength="10" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('##########', this)" value="<?php if(isset($_POST['fixo'])){echo($_POST['fixo']);}?>">
                  </div>
                </div>
              </div> 

              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                <div class="col-md-5">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php if(isset($_POST['email'])){echo($_POST['email']);}?>">
                  </div>
                </div>
                <label class="col-md-1 control-label" for="senha">Senha <h11>*</h11></label>  
                <div class="col-md-2">
                  <input id="senha" name="senha" placeholder="" class="form-control input-md" type="password" required="required">
                </div>
              </div>

              <!-- Search input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="cep">CEP <h11>*</h11></label>
                <div class="col-md-2">
                  <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="<?php if(isset($_POST['cep'])){echo($_POST['cep']);}?>" type="search" maxlength="8" pattern="[0-9]+$">
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                </div>
              </div>

              <!-- Prepended text-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="logradouro">Endereço</label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Logradouro</span>
                    <input id="logradouro" name="logradouro" class="form-control" placeholder="" required=""  type="text" value="<?php if(isset($_POST['logradouro'])){echo($_POST['logradouro']);}?>"> <!-- removido readonly="readonly" -->
                  </div>

                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">Nº <h11>*</h11></span>
                    <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text" value="<?php if(isset($_POST['numero'])){echo($_POST['numero']);}?>">
                  </div>

                </div>

                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Bairro</span>
                    <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text" value="<?php if(isset($_POST['bairro'])){echo($_POST['bairro']);}?>"> <!-- removido readonly="readonly" -->
                  </div>

                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-2 control-label" for="cidade"></label>
                <div class="col-md-4">
                  <div class="input-group">
                    <span class="input-group-addon">Cidade</span>
                    <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text" value="<?php if(isset($_POST['cidade'])){echo($_POST['cidade']);}?>">
                  </div>

                </div>

                <div class="col-md-2">
                  <div class="input-group">
                    <span class="input-group-addon">Estado</span>
                    <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text" value="<?php if(isset($_POST['estado'])){echo($_POST['estado']);}?>">
                  </div>

                </div>

                <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon">Compl.</span>
                    <input id="complemento" name="complemento" class="form-control" placeholder="" required=""  type="text" value="<?php if(isset($_POST['complemento'])){echo($_POST['complemento']);}?>"> <!-- removido readonly="readonly" -->
                  </div>
                  <input id="action" name="action" type="hidden" value="1">

                </div>
              </div>

            </div> <!-- /panel-body -->       

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="Cadastrar"></label>
              <div class="col-md-8">
                <button <?php if (isset($_SESSION['id_usuario'])) {printf("style=\"display: none;\"");} ?> id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                <button <?php if (!isset($_SESSION['id_usuario'])) {printf("style=\"display: none;\"");} ?> id="Salvar" name="Salvar" class="btn btn-success" type="Submit">Salvar</button>
                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
              </div>
            </div>

          </div>

        </fieldset>
      </form>
    </div>
  </div>
  <!-- /CONTEUDO -->
