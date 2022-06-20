<?php
class application {
        protected $db;
        protected $manageGet;
        protected $managepost;
        public $pagina;
        public $categorias;
        public $erros;

        //public $qry = $db->qDb();

        function __construct(){
            $this->db = new database;
            $this->erros = new manageErrors();
            $this->manageGet = new manageGet($this->db, $this->erros);

            $this->pagina = $this->manageGet->pagina;
            $this->categorias = $this->manageGet->categorias;

            if (count($_POST) > 0){ //isto provavelmente tem que ser a ultima coisa a executar
                $this->managePost = new managePost($this->db, $this->erros, $this->manageGet);
            }
        }
}