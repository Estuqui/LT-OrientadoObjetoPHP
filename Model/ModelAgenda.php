<?php
    require_once("./Configuration/Config.php");

    class AgendaModel extends Conn{
        public $tabela;

        function __construct(){
            parent::__construct();
            $this->tabela = 'contatos';
        }
        
        function getAll(){
            $sql = $this->Conn->query("SELECT * FROM $this->tabela");
            $resultQuery = $sql->fetchAll();
            return $resultQuery;
        }
        
    }