<?php


require_once '../model/login-model.php';

class LoginController{

    public $objLoginModel;

    //funcao construtora da classe LoginModel()
    public function __construct(){
        //instancia objeto do model de Login
        $this->objLoginModel = new LoginModel();
        //starta o metodo incluir
        $this->validar();
    }

    
    public function validar(){

        $this->objLoginModel->setEmail($_POST['email']);
        $this->objLoginModel->setSenha(md5($_POST['senha']));


        $resultado = $this->objLoginModel->buscar_user();

        if($resultado){    //if 1- Verifica o retorno do LoginModel
            $dados_usuario = mysqli_fetch_array($resultado);

            if(isset($dados_usuario['pk_codigoUser'])){    //if 2- Verifica a exixtencia do array com a existencia do indice pk_codigoUser

                session_start();

                $_SESSION['id_usuario'] = $dados_usuario['pk_codigoUser'];
                $_SESSION['nome'] = $dados_usuario['nomeUser'];
                $_SESSION['email'] = $dados_usuario['emailUser'];
                $_SESSION['tipouser'] = $dados_usuario['tipoUser'];

                //var_dump($_SESSION);
                //exit("parou aqui");

                header('Location:../index.php');

            }       //fim if 2 
            else {
                header('Location:../?pagina=login&erro=1');
            }
        }       //fim if 1 
        else {
            echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
        }

        // if($resultado >= 1){
        //     echo "<script>alert('Registro incluído com sucesso!');document.location='../view/login-view.php'</script>";
        // }else{
        //     echo "<script>alert('Erro ao gravar registro!');document.location='../view/contratante-cad-view.php'</script>";            
        // }
    }       //fim function validar()
}
new LoginController();