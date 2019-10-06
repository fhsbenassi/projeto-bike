
<?php 

require_once '../controller/contratante-controller.php';

$objContratanteController = new ContratanteController();
$array = $objContratanteController->buscar();
//var_dump($array);
?>

<form method="post" action="controller/remessa-controller.php" id="form" name="form" class="form-horizontal">
  <fieldset>
    <div class="panel panel-info">
      <div class="panel-heading">Cadastro de Remessa</div>

      <div class="panel-body">
        <div class="form-group">

          <div class="col-md-11 control-label">
            <input id="action" name="action" type="hidden" value="incluir" >
            <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
          </div>
        </div>

        <!-- tipo e quantidade-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="tipovolume">Tipo de Volume <h11>*</h11></label>
          <div class="col-md-4">
            <select required id="tipovolume" name="tipovolume" class="form-control">
              <option value="">-- Escolha um tipo de volume  --</option>
              <option value="1">Caixa</option>
              <option value="2">Pacote</option>
              <option value="3">Envelope</option>
              <option value="4">Outros</option>
            </select>
          </div>

          <label class="col-md-3 control-label" for="quantidadevolume">Quant. de Volumes <h11>*</h11></label>  
          <div class="col-md-2">
            <input id="quantidadevolume" name="quantidadevolume" placeholder="" class="form-control input-md" required="" type="text">
          </div>
        </div>
        <!-- /tipo e quantidade-->              

        <!-- peso e fragilidade-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="peso">Peso <h11>*</h11></label>  
          <div class="col-md-2">
            <input id="peso" name="peso" placeholder="" class="form-control input-md" required="" type="text">
          </div>

          <label class="col-md-3 control-label" for="fragilidade">Grau de Fragilidade <h11>*</h11></label>
          <div class="col-md-4">
            <select required id="fragilidade" name="fragilidade" class="form-control">
              <option value="">-- Selecione  --</option>
              <option value="0">Não é Frafil</option>
              <option value="1">Pouco Frágil</option>
              <option value="2">Frágil</option>
              <option value="3">Muito Frágil</option>
            </select>
          </div>
        </div>
        <!-- /peso e fragilidade-->


        <!-- ===========endereço de coleta==============-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="peso"></label>
          <label class="col-md-3 control-label" style="color: red;" for="fragilidade">Endereço de Coleta <h11>*</h11></label>
        </div>

        
        <!-- ENDEREÇO -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="cep_coleta">CEP: </label>
          <div class="col-md-2">
            <input type="text" id="cep_coleta" name="cep_coleta" class="form-control" disabled value="<?php echo $array['cep']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="cidade_coleta">Cidade: </label>
          <div class="col-md-4">
            <input type="text" id="cidade_coleta" name="cidade_coleta" class="form-control" disabled value="<?php echo $array['nomeCidade']; ?>">  </input>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="logradouro_coleta">Endereço</label>
          <div class="col-md-5">
            <input type="text" id="logradouro_coleta" name="logradouro_coleta" class="form-control" disabled value="<?php echo $array['logradouro']; ?>">  </input>
          </div>

          <label class="col-md-1 control-label" for="numero_coleta">Numero: </label>
          <div class="col-md-2">
            <input type="text" id="numero_coleta" name="numero_coleta" class="form-control" disabled value="<?php echo $array['numero']; ?>"> </input>
          </div>                
        </div>


        <div class="form-group">
          <label class="col-md-2 control-label" for="bairro_coleta">Bairro: </label>
          <div class="col-md-3">
            <input type="text" id="bairro_coleta" name="bairro_coleta" class="form-control" disabled value="<?php echo $array['bairro']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="estado_coleta">Estado: </label>
          <div class="col-md-1">
            <input type="text" id="estado_coleta" name="estado_coleta" class="form-control" disabled value="<?php echo $array['sigla']; ?>"> </input>
          </div>

          <label class="col-md-1 control-label" for="complemento_coleta">Comp: </label>
          <div class="col-md-3">
            <input type="text" id="complemento_coleta" name="complemento_coleta" class="form-control" disabled value="<?php echo $array['complemento']; ?>"> </input>
          </div>
        </div>
        <!-- /ENDEREÇO -->


        <!-- ===========destinatario==============-->
        <div class="form-group">
          <label class="col-md-2 control-label"></label>
          <label class="col-md-2 control-label" style="color: red;">Destinatário <h11>*</h11></label>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="nomeDestinatario">Nome <h11>*</h11></label>  
          <div class="col-md-8">
            <input id="nomeDestinatario" name="nomeDestinatario" placeholder="" class="form-control input-md" required="" type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label" for="celular">Celular <h11>*</h11></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="celular" name="celular" class="form-control" placeholder="Apenas numeros" required="" type="text" maxlength="13" minlength="10" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('###########', this)">
            </div>
          </div>

          <label class="col-md-1 control-label" for="fixo">Telefone</label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input id="fixo" name="fixo" class="form-control" placeholder="Apenas numeros" type="text" maxlength="13" minlength="10" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('##########', this)">
            </div>
          </div>
        </div> 

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="emailDestinatario">Email <h11>*</h11></label>
          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input id="emailDestinatario" name="emailDestinatario" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
            </div>
          </div>
        </div>

        <!-- /===========destinatario==============-->


        <!-- ===========endereço de entrega==============-->
        <div class="form-group">

          <label class="col-md-2 control-label"></label>
          <label class="col-md-3 control-label" style="color: red;">Endereço de Entrega <h11>*</h11></label>

        </div>

        <!-- Search input-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="cep-entrega">CEP <h11>*</h11></label>
          <div class="col-md-2">
            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
          </div>

          <div class="col-md-5">
            <div class="input-group">
              <span class="input-group-addon">Cidade</span>
              <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
            </div>
          </div>
        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="logradouro-entrega"></label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon">Logradouro</span>
              <input id="logradouro" name="logradouro" class="form-control" placeholder="" required=""  type="text">
            </div>
          </div>

          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Nº</span>
              <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
            </div>
          </div>

        </div>

        <!-- Prepended text-->
        <div class="form-group">
          <label class="col-md-2 control-label" for="bairro-entrega"></label>
          <div class="col-md-3">
            <div class="input-group">
              <span class="input-group-addon">Bairro</span>
              <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text"> <!-- removido readonly="readonly" -->
            </div>
          </div>

          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">UF</span>
              <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon">Compl.</span>
              <input id="complemento" name="complemento" class="form-control" placeholder="" required=""  type="text"> <!-- removido readonly="readonly" -->
            </div>
          </div>
        </div>
        <!-- /===========endereço de entrega==============-->

      </div> <!-- /panel-body -->       

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Cadastrar"></label>
        <div class="col-md-8">
          <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
          <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
        </div>
      </div>

    </div>

  </fieldset>
</form>