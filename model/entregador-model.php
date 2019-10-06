<?php
session_start();

require_once '../lib/db.php';

class EntregadorModel extends Banco {

    private $nome;
    private $identidade;
    private $dtnasc;    
    private $sexo;
    private $celular;
    private $fixo;
    private $email;
    private $senha;
    private $cep;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;
    private $tipobicicleta;
    private $tipouser = 2;
    private $action;

    public function save(){
        $objBanco = new Banco();

        if (!isset($_SESSION['id_usuario'])) {
            $dtnascsalvar = implode('-', array_reverse(explode('/', $this->dtnasc)));
            $sql  = "INSERT INTO telefone (celular, fixo) VALUES ('$this->celular', '$this->fixo');";
            $sql .= "INSERT INTO endereco (cep, bairro, logradouro, numero, complemento, fk_codigoCidade) VALUES ('$this->cep', '$this->bairro', '$this->logradouro', '$this->numero', '$this->complemento', (select pk_codigoCidade from cidade where nomeCidade='$this->cidade'));";
            $sql .= "INSERT INTO usuario (nomeUser, dtNasc, emailUser, senha, numeroIdentidade, tipoUser, fk_codigoTelefone, fk_codigoEndereco) VALUES ('$this->nome', '$dtnascsalvar', '$this->email', '$this->senha', '$this->identidade', '$this->tipouser', (SELECT MAX(pk_codigoTelefone) FROM telefone), (SELECT MAX(pk_codigoEndereco) FROM endereco));";
            $sql .= "INSERT INTO entregador (sexo, fk_codigoTipoBicicleta, fk_codigoUser) VALUES ('$this->sexo', (SELECT pk_codigoTipoBicicleta from tipoBicicleta where tipoBicicleta.tipoBicicleta='$this->tipobicicleta'), (SELECT MAX(pk_codigoUser) FROM usuario));";
        }
        elseif (isset($_SESSION['id_usuario'])) {
            $dtnascsalvar = implode('-', array_reverse(explode('/', $this->dtnasc)));
            $sql = "UPDATE telefone set celular = '$this->celular', fixo = '$this->fixo' where pk_codigoTelefone IN (SELECT pk_codigoTelefone FROM (SELECT pk_codigoTelefone FROM usuario AS user INNER JOIN telefone AS fone ON (user.fk_codigoTelefone = fone.pk_codigoTelefone) WHERE user.pk_codigoUser = '".$_SESSION['id_usuario']."') as foneuser);";
            $sql .= "UPDATE endereco SET cep = '$this->cep', bairro = '$this->bairro', logradouro = '$this->logradouro', numero = '$this->numero', complemento = '$this->complemento', fk_codigoCidade = (select pk_codigoCidade from cidade where nomeCidade='$this->cidade') WHERE pk_codigoEndereco IN (select pk_codigoEndereco FROM (select pk_codigoEndereco from usuario as user INNER JOIN endereco as city ON (user.fk_codigoEndereco = city.pk_codigoEndereco) where user.pk_codigoUser = '".$_SESSION['id_usuario']."') as cityuser);";
            $sql .= "UPDATE usuario SET nomeUser = '$this->nome', dtNasc = '$dtnascsalvar', emailUser = '$this->email', senha = '$this->senha', numeroIdentidade = '$this->identidade' WHERE pk_codigoUser = '".$_SESSION['id_usuario']."';";
            $sql .= "UPDATE entregador SET sexo = '$this->sexo', fk_codigoTipoBicicleta = (SELECT pk_codigoTipoBicicleta from tipoBicicleta where tipoBicicleta.tipoBicicleta='$this->tipobicicleta') WHERE fk_codigoUser = '".$_SESSION['id_usuario']."';";
        }

        

        $result = mysqli_multi_query($objBanco->conectar(), $sql)or die(mysql_error());

        return $result;
    }

    public function search(){
        $objBanco = new Banco();

        $sql = "SELECT * FROM ((((((usuario INNER JOIN endereco ON usuario.fk_codigoEndereco = endereco.pk_codigoEndereco) INNER JOIN cidade ON endereco.fk_codigoCidade = cidade.pk_codigoCidade) INNER JOIN estado ON cidade.fk_codigoEstado = estado.pk_codigoEstado) INNER JOIN telefone ON usuario.fk_codigoTelefone = telefone.pk_codigoTelefone) INNER JOIN entregador ON entregador.fk_codigoUser = usuario.pk_codigoUser) INNER JOIN tipobicicleta ON entregador.fk_codigoTipoBicicleta = tipobicicleta.pk_codigoTipoBicicleta) WHERE usuario.pk_codigoUser = '".$_SESSION['id_usuario']."';";


        $result = mysqli_query($objBanco->conectar(), $sql)or die(mysql_error());

        if ($result) {
           while ($row = $result->fetch_assoc()) {
              return $row;
              //print_r($row);
              //exit();
          }
      }

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


