<?php

class Autor{
    private $id;
    private $nome;
    private $data_inclusao;
    private $data_alteracao;
    private $inclusao_funcionario_id;
    private $alteracao_funcionario_id;
  
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    
}
?>