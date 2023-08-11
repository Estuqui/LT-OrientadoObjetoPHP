<?php

    define('HOST','localhost');
    define('DATABASE','lista_telefonica');
    define('USERNAME', 'jessica');
    define('PASSWORD','123456');

    class Conn{
        public $conn;
        
        function __construct()
        {
            $this->ConnDataBase();
        }

        function ConnDataBase(){
            $this->conn = null;
            
            try{
                $this->conn =  new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD);
            }
            catch (PDOException $e){
                echo "Erro".$e->getMessage();
            }
            
            
        }
    }

    $testConnection = new Conn();
    
?>