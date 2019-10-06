  
<?php

if (isset($_GET['pagina'])){
  $escolha = ($_GET['pagina']);
  if ($escolha == 'remessa-view') {
    require_once 'controller/remessa-controller.php'; 
        //echo "model sem pontos";
  }else {
    require_once '../controller/remessa-controller.php';
        //echo "model com pontos";
  }
}else {
  require_once '../controller/remessa-controller.php';
        //echo "sem setar get";
}

$objRemessaController = new RemessaController();

$array_contratante = $objRemessaController->buscar($_POST['pk_codigoRemessa']);
//var_dump($array_contratante);

if(!empty($_POST)){}else{
  echo "o _POST ta vazio";
  exit();
}

$array_destinatario = $_POST; 
//var_dump($array_contratante);
?>

<!-- CONTEUDO -->
<div class="main">
  <div class="container" id="container_cadastro">

    <div id="form-profile" name="form" class="form-horizontal">
      <!-- <fieldset> -->
        <div class="panel panel-info">
          <div class="panel-heading">Dados da Remessa</div>

          <div class="panel-body">


            <!-- ============CONTRATANTE============== -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="contratante">Contratante: </label>  
              <div class="col-md-8">
                <input type="text" id="contratante" name="contratante" class="form-control" readonly value="<?php echo $array_contratante['nomeUser']; ?>"> </input>
              </div>
            </div>

            <!-- ============/CONTRATANTE============== -->


            <!-- ============COLETA============== -->
            <div class="form-group">
              <label class="col-md-3 control-label" style="color: red;" for="fragilidade">Endereço de Coleta </label>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="logradouro">Endereço</label>
              <div class="col-md-5">
                <input type="text" id="logradouro" name="logradouro" class="form-control" readonly value="<?php echo $array_contratante['logradouro']; ?>">  </input>
              </div>

              <label class="col-md-1 control-label" for="numero">Numero: </label>
              <div class="col-md-2">
                <input type="text" id="numero" name="numero" class="form-control" readonly value="<?php echo $array_contratante['numero']; ?>"> </input>
              </div>                
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="bairro">Bairro: </label>
              <div class="col-md-3">
                <input type="text" id="bairro" name="bairro" class="form-control" readonly value="<?php echo $array_contratante['bairro']; ?>"> </input>
              </div>


              <label class="col-md-1 control-label" for="complemento">Comp: </label>
              <div class="col-md-3">
                <input type="text" id="complemento" name="complemento" class="form-control" readonly value="<?php echo $array_contratante['complemento']; ?>"> </input>
              </div>
            </div>

            <!-- ============/COLETA============== -->

            <!-- ============DESTINATARIO============== -->
            <div class="form-group">
              <label class="col-md-3 control-label" style="color: red;" for="fragilidade">Destinatário </label>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="destinatario">Destinatário: </label>  
              <div class="col-md-8">
                <input type="text" id="destinatario" name="destinatario" class="form-control" readonly value="<?php echo $array_destinatario['nomeDestinatario']; ?>"> </input>
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="celular">Celular: </label>
              <div class="col-md-3">
                <input type="text" id="celular" name="celular" class="form-control" readonly value="<?php echo $array_destinatario['celular']; ?>"> </input>
              </div>

              <label class="col-md-1 control-label" for="fixo">Telefone: </label>
              <div class="col-md-3">
                <input type="text" id="fixo" name="fixo" class="form-control" readonly value="<?php echo $array_destinatario['fixo']; ?>"> </input>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Email: </label>
              <div class="col-md-5">
                <input type="text" id="email" name="email" class="form-control" readonly value="<?php echo $array_destinatario['emailDestinatario']; ?>"> </input>
              </div>                
            </div>

            <!-- ============/DESTINATARIO============== -->        

            <!-- ============ENTREGA============== -->
            <div class="form-group">
              <label class="col-md-3 control-label" style="color: red;" for="fragilidade">Endereço de Entrega </label>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="logradouro">Endereço</label>
              <div class="col-md-5">
                <input type="text" id="logradouro" name="logradouro" class="form-control" readonly value="<?php echo $array_destinatario['logradouro']; ?>">  </input>
              </div>

              <label class="col-md-1 control-label" for="numero">Numero: </label>
              <div class="col-md-2">
                <input type="text" id="numero" name="numero" class="form-control" readonly value="<?php echo $array_destinatario['numero']; ?>"> </input>
              </div>                
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label" for="bairro">Bairro: </label>
              <div class="col-md-3">
                <input type="text" id="bairro" name="bairro" class="form-control" readonly value="<?php echo $array_destinatario['bairro']; ?>"> </input>
              </div>


              <label class="col-md-1 control-label" for="complemento">Comp: </label>
              <div class="col-md-3">
                <input type="text" id="complemento" name="complemento" class="form-control" readonly value="<?php echo $array_destinatario['complemento']; ?>"> </input>
              </div>
            </div>

            <!-- ============/ENTREGA============== -->

            <!-- =============CARGA============= -->
            <div class="form-group">
              <label class="col-md-3 control-label" style="color: red;" for="fragilidade">Carga </label>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="tipovolume">Tipo de Volume: </label>
              <div class="col-md-4">
                <input type="text" id="tipovolume" name="tipovolume" class="form-control" readonly value="<?php switch($array_destinatario['tipoVolume']){
                  case 1: $tipoVolume = "Caixa"; break;
                  case 2: $tipoVolume = "Pacote"; break;
                  case 3: $tipoVolume = "Envelope"; break;
                  default: $tipoVolume = "Outros"; break;} echo $tipoVolume; ?>">  </input>
                </div>

                <label class="col-md-3 control-label" for="quantidade">Quant. de Volumes: </label>
                <div class="col-md-2">
                  <input type="text" id="quantidade" name="quantidade" class="form-control" readonly value="<?php echo $array_destinatario['quantidade']; ?>"> </input>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label" for="peso">Peso: </label>
                <div class="col-md-2">
                  <input type="text" id="peso" name="peso" class="form-control" readonly value="<?php echo $array_destinatario['peso']; ?>"> </input>
                </div>

                <label class="col-md-2 control-label" for="fragilidade">Grau de Fragilidade: </label>
                <div class="col-md-4">
                  <input type="text" id="fragilidade" name="fragilidade" class="form-control" readonly value="<?php switch($array_destinatario['fragilidade']){
                    case 1: $fragilidade = "POUCO FRÁGIL"; break;
                    case 2: $fragilidade = "FRÁGIL"; break;
                    case 3: $fragilidade = "MUITO FRÁGIL"; break;
                    default: $fragilidade = "NÃO É FRÁGIL"; break;} echo $fragilidade; ?>">  </input>
                  </div>
                </div>

                <!-- =============/CARGA============= -->


              </div> <!-- /panel-body -->       

              <!-- Button (Double) -->
              <div class="form-group">
                <label class="col-md-2 control-label" for="peso"></label>
                <div class="col-md-2">
                  <form method="post" action="" id="ajax_form">
                    <input type="hidden" name="action" id="action" value="aplicar">
                    <input type="hidden" name="codigoRemessa" id="codigoRemessa" value="<?php echo $array_destinatario['pk_codigoRemessa'];?>">
                    <button <?php if ($_SESSION['tipouser']=='1') {printf("style=\"display: none;\"");} ?> id="Aplicar" name="Aplicar" class="btn btn-success" type="Submit" onclick="aplicar_remessa()">Aplicar à Remessa</button>
                  </form>

                  <form method="post" action="?pagina=candidatos" id="ajax_form2">
                    <input type="hidden" name="action2" id="action2" value="aplicar">
                    <input type="hidden" name="codigoRemessa2" id="codigoRemessa2" value="<?php echo $array_destinatario['pk_codigoRemessa'];?>">
                    <button <?php if ($_SESSION['tipouser']=='2') {printf("style=\"display: none;\"");} ?> id="Candidatos" name="Candidatos" class="btn btn-success" type="Submit">Ver Candidatos</button>
                  </form>
                  
                </div>

                <div class="col-md-2">
                  <a href="https://api.whatsapp.com/send?phone=55<?php echo $array_destinatario['celular']; ?>&text=Olá estou interessado na sua proposta de encomenda!!" target="_blank" <?php if ($_SESSION['tipouser']=='1') {printf("style=\"display: none;\"");} ?> class="btn btn-success" type="Submit">Enviar Mensagem</a>
                </div>

              </div>

            </div>

            <!-- </fieldset> -->
          </div>
        </div>
      </div>
  <!-- /CONTEUDO -->