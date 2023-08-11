<?php 
    
    require_once("./Model/ModelAgenda.php");

    class AgendaController{
        private $listadecontato;
        
        function __construct()
        {
            $this->listadecontato = new AgendaModel;
        }
        
        function getAll(){
            $result = $this->listadecontato->getAll();
            require_once("./Views/Agenda.php");
        }

           
    }

?>