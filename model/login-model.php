<?php

require_once '../lib/db.php';

class LoginModel extends Banco {

    private $email;
    private $senha;
    private $tipouser;
    
    public function buscar_user(){
        $objBanco = new Banco();

        $sql  = "SELECT * FROM usuario WHERE emailUser = '$this->email' AND senha = '$this->senha';";

        $result = mysqli_query($objBanco->conectar(), $sql)or die(mysql_error());        

        return $result;

    }


    //Metodos Get e Set

    //Metodos Set
    public function setEmail($email){
        $this->email = $email;
        return $this;        
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;        
    }

    public function setTipouser($tipouser){
        $this->tipouser = $tipouser;
        return $this;        
    }     
    

    //Metodos Get


    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getTipouser(){
        return $this->tipouser;
    }
}
?>


