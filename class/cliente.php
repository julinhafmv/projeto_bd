<?php

class Cliente {
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $cpf;
    private $rg;
    private $data_nascimento;
    private $data_inclusao;
    private $data_alteracao;
    private $inclusao_funcionario_id;
    private $alteracao_funcionario_id;

    public function getId(){
        return $this->id;
    }

    public function setId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail(){
        return $this->email;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf(){
        return $this->cpf;
    }
    
    public function getRG(){
        return $this->rg;
    }
    public function setRG(){
        return $this->rg;
    }

    public function getDataNascimento(){
        return $this->data_nascimento;
    }
    public function setDataNascimento(){
        return $this->data_nascimento;
    }

    public function getDataInclusao(){
        return $this->data_inclusao;
    }
    public function setDataInclusao(){
        return $this->data_inclusao;
    }

    public function getDataAlteracao(){
        return $this->data_alteracao;
    }
    public function setDataAlteracao(){
        return $this->data_alteracao;
    }

    public function getInclusaoFuncionarioId(){
        return $this->inclusao_funcionario_id;
    }
    public function setInclusaoFuncionarioId(){
        return $this->inclusao_funcionario_id;

    } public function getAlteracaoFuncionarioId(){
        return $this->alteracao_funcionario_id;
  
    }
    
}

?>