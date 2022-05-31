<?php
    /* Class para criar e determinar erros GET e POST
     * */
    class manageErrors{
        public $formErrors = [];
        public $pageErrors = [];
        public $numFormErrors = 0;

        function setFormError($campo, $errMsg){
            $this->formErrors[$campo] = $errMsg;
            $this->numFormErrors += 1;
        }
    }
