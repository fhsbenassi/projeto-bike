<?php


if (isset($_GET['pagina'])){
    $escolha = ($_GET['pagina']);
    if ($escolha == 'remessa-view'  || $escolha == 'candidatos') {
        require_once 'model/remessa-model.php'; 
        //echo "model sem pontos";
    }else {
        require_once '../model/remessa-model.php';
        //echo "model com pontos";
    }
}else {
    require_once '../model/remessa-model.php';
        //echo "sem setar get";
}


class RemessaController{

    public $objRemessaModel;

    //funcao construtora da classe ContratanteModel()
    public function __construct(){
        //$escolha = isset($_POST['action']);
        //var_dump($_POST);
        //exit();
  
        $this->objRemessaModel = new RemessaModel();

        if (isset($_POST['action'])) {
            
            if ($_POST['action'] == "aplicar"){
            echo($_POST['action']);
            echo("- A Escolha foi aplicar -");                 
            $this->aplicar();
        }
        elseif ($_POST['action'] == "incluir"){
            echo($_POST['action']);
            echo("- A Escolha foi incluir -");                 
            $this->incluir();
        }
        elseif ($_POST['action'] == "candidatos"){
            echo($_POST['action']);
            echo("- A Escolha foi incluir -");                 
            $this->listar_candidatos();
        }
        else{
            echo($_POST['action']);
            echo("- A Escolha foi listar -");                 
            $this->listar();
        }
        }
      

        // switch ($escolha) {
        //     case 'aplicar':
        //          echo($_POST['action']);
        //          echo("- A Escolha foi aplicar -");
        //          sleep(4);
        //         $this->aplicar();
        //         break; 
        //     case 'incluir':
        //          echo($_POST['action']);
        //          echo("- A Escolha foi incluir -");
        //          sleep(4);
        //         $this->incluir();
        //         break;                       
        //     default:
        //         echo($_POST['action']);
        //          echo("- A Escolha foi listar -");
        //          sleep(4);
        //         $this->listar();
        //         break;
        // }
        
    }

    
    public function incluir(){        

        foreach ($_POST as $key => $dados_form) {

            $this->objRemessaModel->__set($key, $dados_form);

        }
        unset($key, $dados_form);

        $resultado = $this->objRemessaModel->save();

        if($resultado){
            echo "<script>alert('Remessa incluída com sucesso!');document.location='../?pagina=home-page'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');document.location='../?pagina=home-page'</script>";            
        }
    }


    public function buscar($codigo){
        //exit("cheguei");

        $resultado_busca = $this->objRemessaModel->search($codigo);

        if($resultado_busca){            
            //echo "<script>alert('Registro encontrado com sucesso!');</script>";
            return $resultado_busca;
        }else{
            echo "<script>alert('Erro ao buscar registro!');</script>";            
        }
    }


    public function listar(){
        //exit("cheguei");

        $resultado_lista = $this->objRemessaModel->list();

        if($resultado_lista){            
            //echo "<script>alert('Registro encontrado com sucesso!');</script>";
            return $resultado_lista;
        }else{
            echo "<script>alert('Erro ao buscar registro!');</script>";            
        }
    }

    public function listar_candidatos($remessa){
        //exit("cheguei");

        $resultado_lista = $this->objRemessaModel->list_apply($remessa);

        if($resultado_lista){            
            //echo "<script>alert('Registro encontrado com sucesso!');</script>";
            return $resultado_lista;
        }else{
            echo "<script>alert('Erro ao buscar candidatos!');</script>";            
        }
    }


    public function aplicar(){        

        foreach ($_POST as $key => $dados_form) {

            $this->objRemessaModel->__set($key, $dados_form);

        }
        unset($key, $dados_form);

        $resultado = $this->objRemessaModel->apply();

        if($resultado){
            echo "<script>alert('Aplicado com sucesso!');document.location='../?pagina=home-page'</script>";
        }else{
            echo "<script>alert('Erro ao aplicar a remessa!');document.location='../?pagina=home-page'</script>";            
        }
    }



}
new RemessaController();