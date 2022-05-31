<?php
    /* Classe managePost - só é carregada a partir da classe principal quando o $_POST tem algum elemento ($_POST > 0)
     *
     */
    class managePost {
        protected $db;
        protected $erros;
        protected $manageGet;

        function __construct($db, $erros, $manageGet){
            $this->db = $db;
            $this->erros = $erros;
            $this->manageGet = $manageGet;
            /* Os formulários estão ser verificados manualmente, isto tem que ser passado para a base de dados */
            if(isset($_POST['sublogin'])){
                $this->processLogin();
            }
        }

        function processLogin(){
            /* Campos do formulário login */
            $utilizador = $_POST['user'];
            $password = $_POST['pass'];
            if (isset($_POST['remember'])){
                $lembrarUtilizador = true;
            }else{
                $lembrarUtilizador = false;
            }
            /* verificação de campos */
            /* utilizador */
            if($utilizador == ""){
                $this->erros->setFormError("loginUser", "O campo Utilizador não pode estar vazio.");
            }
            /* password */
            if($password == ""){
                $this->erros->setFormError("loginPass", "O Campo Password não pode estar vazio.");
            }
        }
    }