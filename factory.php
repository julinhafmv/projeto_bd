<?php

include_once("db.php");
include_once("class/funcionarios.php");
include_once("class/autor.php");
include_once("class/cliente.php");
include_once("class/livros.php");
include_once("class/emprestimo.php");

class Factory {
    public static function db (){
        return DB::getInstance();
    }
    
    public static function funcionario (){
        return new Funcionario();
    }
}

class Autor{
    public static function db (){
        return DB::getInstance();
    }
    
    public static function autor (){
        return new Autor();
    }
}

class Cliente{
    public static function db (){
        return DB::getInstance();
    }
    
    public static function cliente (){
        return new Cliente();
    }
}

class Livros {
    public static function db (){
        return DB::getInstance();
    }
    
    public static function livros (){
        return new Livros();
    }
}

class Emprestimo{
    public static function db (){
        return DB::getInstance();
    }
    
    public static function emprestimo (){
        return new Emprestimo();
    }
}


?>