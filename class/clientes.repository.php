<?php

class ClientesRepository implements Repository{
    public static function listAll(){}
    public static function get($id){
        $db = DB::getInstance();

        $sql = "SELECT * FROM cliente";

        $query = $db->prepare($sql);
        $query->bindParam(":id",$id);
        $query->execute();

        $list = array();
        foreach($query->fetchAll(PDO::FETCH_OBJ) as $row){
            $cliente = new Cliente;
            $cliente-> setId($row->id);
            $cliente-> setNome($row->nome);
            $cliente-> setData_Inclusao($row->data_inclusao);
            $cliente-> setData_Alteracao($row->data_alteracao);
            $cliente-> setInclusao_Funcionario_Id($row->inclusao_funcionario_id);
            $cliente-> setAlteracao_Funcionario_Id($row->alteracao_funcionario_id);

            $list[] = $Cliente;

        }
        return $list;

        if($query->numRows() > 0 ){
            $row = $query->fetch(PDO::FETCH_OBJ);
            $autor = new Cliente;
            $autor-> setId($row->id);
            $autor-> setNome($row->nome);
            $autor-> setData_Inclusao($row->data_inclusao);
            $autor-> setData_Alteracao($row->data_alteracao);
            $autor-> setInclusao_Funcionario_Id($row->inclusao_funcionario_id);
            $autor-> setAlteracao_Funcionario_Id($row->alteracao_funcionario_id);

            return $Cliente;
        }
        return null;
    }

    public static function insert($obj){}
    public static function update($obj){}
    public static function delete($obj){} 
    
}


?>