<?php
if ( session_status() !== PHP_SESSION_ACTIVE )
{
  session_start();
}

if (isset($_GET['pagina'])){
  $escolha = ($_GET['pagina']);
  if ($escolha == 'remessa-view'  || $escolha == 'candidatos') {
    require_once 'lib/db.php';
  }else {
    require_once '../lib/db.php';
  }
}else {
  require_once '../lib/db.php';
}

//require_once '../lib/db.php';

class RemessaModel extends Banco {

  private $tipovolume;
  private $quantidadevolume;
  private $peso;    
  private $fragilidade;       
  private $nomeDestinatario;
  private $celular;
  private $fixo;
  private $emailDestinatario;
  private $cep;
  private $cidade;
  private $logradouro;
  private $numero;
  private $bairro;
  private $estado;
  private $complemento;    
  private $contratante;
  private $entregador;
  private $status;
  private $action;
  private $codigoRemessa;


    // function para salvar - *implementar update*
  public function save(){
    $objBanco = new Banco();

        //$dtnascsalvar = implode('-', array_reverse(explode('/', $this->dtnasc)));

    $sql  = "INSERT INTO telefone (celular, fixo) VALUES ('$this->celular', '$this->fixo');";

    $sql .= "INSERT INTO endereco (cep, bairro, logradouro, numero, complemento, fk_codigoCidade) VALUES ('$this->cep', '$this->bairro', '$this->logradouro', '$this->numero', '$this->complemento', (SELECT pk_codigoCidade FROM cidade WHERE nomeCidade='$this->cidade'));";

    $sql .= "INSERT INTO destinatario (nomeDestinatario, emailDestinatario, fk_codigoEndereco, fk_codigoTelefone) VALUES ('$this->nomeDestinatario', '$this->emailDestinatario', (SELECT MAX(pk_codigoEndereco) FROM endereco), (SELECT MAX(pk_codigoTelefone) FROM telefone));";

    $sql .= "INSERT INTO remessa (quantidade, peso, fragilidade, tipoVolume, fk_codigoContratante, fk_codigoDestinatario, codigoEnderecoColeta) VALUES ('$this->quantidadevolume', '$this->peso', '$this->fragilidade', '$this->tipovolume', (SELECT pk_codigoContratante FROM (usuario INNER JOIN contratante ON contratante.fk_codigoUser = usuario.pk_codigoUser) WHERE usuario.pk_codigoUser = '".$_SESSION['id_usuario']."'), (SELECT MAX(pk_codigoDestinatario) FROM destinatario), (SELECT pk_codigoEndereco FROM (usuario INNER JOIN endereco ON usuario.fk_codigoEndereco = endereco.pk_codigoEndereco) WHERE usuario.pk_codigoUser = '".$_SESSION['id_usuario']."'));";
    //echo($sql);
    //exit();


    $result = mysqli_multi_query($objBanco->conectar(), $sql)or die(mysql_error());

    return $result;
  }

    // function para buscar
  public function search($codigo){
    $objBanco = new Banco();

    $sql = "SELECT * FROM ((((remessa INNER JOIN contratante ON remessa.fk_codigoContratante = contratante.pk_codigoContratante) INNER JOIN usuario ON contratante.fk_codigoUser = usuario.pk_codigoUser) INNER JOIN endereco ON usuario.fk_codigoEndereco = endereco.pk_codigoEndereco) INNER JOIN telefone ON usuario.fk_codigoTelefone = telefone.pk_codigoTelefone) WHERE remessa.pk_codigoRemessa = '$codigo';";
        // echo($sql);
        // exit();

    $result = mysqli_query($objBanco->conectar(), $sql);

    if ($result) {
     while ($row = $result->fetch_assoc()) {
      return $row;
              //print_r($row);
              //exit();
    }
  }

}


    // function para listar
public function list(){
  $objBanco = new Banco();

  if ($_SESSION['tipouser'] == 2) {
    $sql = "SELECT * FROM (((remessa INNER JOIN destinatario on remessa.fk_codigoDestinatario = destinatario.pk_codigoDestinatario) INNER JOIN endereco on destinatario.fk_codigoEndereco = endereco.pk_codigoEndereco) INNER JOIN telefone on destinatario.fk_codigoTelefone = telefone.pk_codigoTelefone);";

  }
  elseif ($_SESSION['tipouser'] == 1) {
    $sql = "SELECT * FROM (((((remessa INNER JOIN destinatario on remessa.fk_codigoDestinatario = destinatario.pk_codigoDestinatario) INNER JOIN endereco on destinatario.fk_codigoEndereco = endereco.pk_codigoEndereco) INNER JOIN telefone on destinatario.fk_codigoTelefone = telefone.pk_codigoTelefone) INNER JOIN contratante on remessa.fk_codigoContratante = contratante.pk_codigoContratante) INNER JOIN usuario on contratante.fk_codigoUser = usuario.pk_codigoUser) WHERE pk_codigoUser  = '".$_SESSION['id_usuario']."';";

  }

  $result_lista = mysqli_query($objBanco->conectar(), $sql)or die(mysql_error());

  if ($result_lista){
    return $result_lista;
  }
}

    // function para listar
public function list_apply($remessa){
  $objBanco = new Banco();

  
    $sql = "SELECT * FROM (((((((aplicacao INNER JOIN remessa on aplicacao.codigoRemessa = remessa.pk_codigoRemessa) INNER JOIN destinatario on remessa.fk_codigoDestinatario = destinatario.pk_codigoDestinatario) INNER JOIN endereco on destinatario.fk_codigoEndereco = endereco.pk_codigoEndereco) INNER JOIN entregador on aplicacao.codigoCandidato = entregador.pk_codigoEntregador) INNER JOIN usuario on entregador.fk_codigoUser = usuario.pk_codigoUser) INNER JOIN telefone on usuario.fk_codigoTelefone = telefone.pk_codigoTelefone) INNER JOIN contratante on remessa.fk_codigoContratante = contratante.pk_codigoContratante) WHERE aplicacao.codigoRemessa  = '$remessa';";

  //}
  $result_lista = mysqli_query($objBanco->conectar(), $sql);

  if ($result_lista){
    return $result_lista;
  }
}




  // function para aplicar a vaga para entrega
public function apply(){
  $objBanco = new Banco();

  $sql  = "INSERT INTO aplicacao (codigoCandidato, codigoRemessa) VALUES ((select pk_codigoEntregador from (entregador INNER JOIN usuario ON entregador.fk_codigoUser = usuario.pk_codigoUser) where usuario.pk_codigoUser = '".$_SESSION['id_usuario']."'), '$this->codigoRemessa');";

  $result = mysqli_multi_query($objBanco->conectar(), $sql);

  return $result;
}


    //Metodos Get e Set

public function __get($atributo){

  return $this->$atributo;
}

public function __set($atributo, $valor){

  $this->$atributo = $valor;
}

}
?>


