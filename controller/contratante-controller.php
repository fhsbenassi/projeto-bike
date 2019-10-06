<?php


require_once '../model/contratante-model.php';

class ContratanteController{

    public $objContratanteModel;

    //funcao construtora da classe ContratanteModel()
    public function __construct(){
        //instancia objeto do model de Contratante
        $this->objContratanteModel = new ContratanteModel();
        if(isset($_POST['action'])){
            $escolha = ($_POST['action']);
            if($escolha == 1){
                $this->incluir();
            }            
        }
    }

    
    public function incluir(){        

        foreach ($_POST as $key => $dados_form) {
            if ($key == 'senha') {
                $this->objContratanteModel->__set($key, md5($dados_form));
            }
            else
                $this->objContratanteModel->__set($key, $dados_form);
        }
        unset($key, $dados_form);

        $resultado = $this->objContratanteModel->save();

        if($resultado){
            if (!isset($_SESSION['id_usuario'])) {
                echo "<script>alert('Registro incluído com sucesso!');document.location='../?pagina=login'</script>";
            }else{
                echo "<script>alert('Registro incluído com sucesso!');document.location='../?pagina=home-page'</script>";
            }
            
        }else{
            echo "<script>alert('Erro ao gravar registro!');document.location='../?pagina=cad-contratante'</script>";            
        }
    }


    public function buscar(){
        //exit("cheguei");

        $resultado_busca = $this->objContratanteModel->search();

        if($resultado_busca){            
            //echo "<script>alert('Registro encontrado com sucesso!');</script>";
            return $resultado_busca;
        }else{
            echo "<script>alert('Erro ao buscar registro!');</script>";            
        }
    }

}
new ContratanteController();