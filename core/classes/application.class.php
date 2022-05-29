<?php
class application {
        protected $db;
        protected $manageGet;
        public $pagina;
        public $categorias;

        //public $qry = $db->qDb();

        function __construct(){
            $this->db  = new database;
            $this->manageGet  = new manageGet($this->db);

            $this->pagina = $this->manageGet->pagina;
            $this->categorias = $this->manageGet->categorias;
        }
}