
<?php 

require_once '../controller/contratante-controller.php';

$objContratanteController = new ContratanteController();
$array = $objContratanteController->buscar();
//var_dump($array);
?>

<form method="post" action="?pagina=cad-contratante" id="form-profile" name="form" class="form-horizontal">
  <fieldset>
    <div class="panel panel-info">
      <div class="panel-heading">Dados do Usuário</div>

      <div class="panel-body">

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="nome">Nome: </label>  
          <div class="col-md-8">
            <input type="text" id="nome" name="nome" class="form-control" readonly value="<?php echo $array['nomeUser']; ?>"> </input>
          </div>
        </div>              

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="nome">CPF / CNPJ: </label>  
          <div class="col-md-3">
            <input type="text" id="identidade" name="identidade" class="form-control" readonly value="<?php echo $array['numeroIdentidade']; ?>"></input>
          </div>

          <label class="col-md-2 control-label" for="nome">Nascimento: </label>  
          <div class="col-md-2">
            <input type="text" id="dtnasc" name="dtnasc" class="form-control" readonly value="<?php $dtnascsalvar = implode('/', array_reverse(explode('-', $array['dtNasc']))); echo $dtnascsalvar; ?>"></input> <!-- removido  onBlur="showhide()" -->
          </div>

          <!-- Multiple Radios (inline) -->

          <label class="col-md-1 control-label" for="radios">Pessoa: </label>
          <div class="col-md-2"> 
            <input type="text" id="pessoa" name="pessoa" class="form-control" readonly value="<?php if($array['tipoPessoa'] == 1){echo("Física");}else{echo("Jurídica");}?>"> </input>
          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="celular">Celular: </label>
          <div class="col-md-3">
            <input type="text" id="celular" name="celular" class="form-control" readonly value="<?php echo $array['celular']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="fixo">Telefone: </label>
          <div class="col-md-3">
            <input type="text" id="fixo" name="fixo" class="form-control" readonly value="<?php echo $array['fixo']; ?>"> </input>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="email">Email: </label>
          <div class="col-md-5">
            <input type="text" id="email" name="email" class="form-control" readonly value="<?php echo $array['emailUser']; ?>"> </input>
          </div>                
        </div>

        <!-- ENDEREÇO -->

        <div class="form-group">
          <label class="col-md-2 control-label" for="cep">CEP: </label>
          <div class="col-md-2">
            <input type="text" id="cep" name="cep" class="form-control" readonly value="<?php echo $array['cep']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="cidade">Cidade: </label>
          <div class="col-md-4">
            <input type="text" id="cidade" name="cidade" class="form-control" readonly value="<?php echo $array['nomeCidade']; ?>">  </input>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="logradouro">Endereço</label>
          <div class="col-md-5">
            <input type="text" id="logradouro" name="logradouro" class="form-control" readonly value="<?php echo $array['logradouro']; ?>">  </input>
          </div>

          <label class="col-md-1 control-label" for="numero">Numero: </label>
          <div class="col-md-2">
            <input type="text" id="numero" name="numero" class="form-control" readonly value="<?php echo $array['numero']; ?>"> </input>
          </div>                
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="bairro">Bairro: </label>
          <div class="col-md-3">
            <input type="text" id="bairro" name="bairro" class="form-control" readonly value="<?php echo $array['bairro']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="estado">Estado: </label>
          <div class="col-md-1">
            <input type="text" id="estado" name="estado" class="form-control" readonly value="<?php echo $array['sigla']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="complemento">Comp: </label>
          <div class="col-md-3">
            <input type="text" id="complemento" name="complemento" class="form-control" readonly value="<?php echo $array['complemento']; ?>"> </input>
          </div>
        </div>

        <!-- /ENDEREÇO -->


      </div> <!-- /panel-body -->       

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
          <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Editar Cadastro</button>
          <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Excluir Cadastro</button>
        </div>
      </div>

    </div>

  </fieldset>
</form>