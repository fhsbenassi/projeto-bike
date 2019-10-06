<?php


require_once '../model/entregador-model.php';

class EntregadorController{

    public $objEntregadorModel;

    //funcao construtora da classe EntregadorModel()
    public function __construct(){
        //instancia objeto do model de Entregador
        $this->objEntregadorModel = new EntregadorModel();
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
                $this->objEntregadorModel->__set($key, md5($dados_form));
            }
            else
                $this->objEntregadorModel->__set($key, $dados_form);
        }
        unset($key, $dados_form);

        $resultado = $this->objEntregadorModel->save();

        if($resultado){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../?pagina=login'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');document.location='../?pagina=cad-entregador'</script>";            
        }
    }

    public function buscar(){
        //exit("cheguei");

        $resultado_busca = $this->objEntregadorModel->search();

        if($resultado_busca){            
            //echo "<script>alert('Registro encontrado com sucesso!');</script>";
            return $resultado_busca;
        }else{
            echo "<script>alert('Erro ao buscar registro!');</script>";            
        }
    }
}
new EntregadorController();