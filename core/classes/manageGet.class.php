<?php
class manageGet{
    public $pagina;
    public $categorias;
    function __construct($db, $erros){
        $this->setCatPage();
    }
    /* Função para determinar qual é a página e categoria requisitada
                * Cria duas variaveis a partir do método manageurl():
                * $pagina - a página requisitada
                * $categorias um array de elemententos correspondetes a categorias */
    function setCatPage(){
        /* se exisitir alguma coisa no url determinar a página e categorias (se existirem)
         * o URL tem que ser diferente do nome do domínio */
        if($_GET['url'] != NULL){
            $url = $this->manageUrl($_GET['url']);
            $elementosUrl = count($url);
            if($elementosUrl == 1){
                $protoPagina = $url[0];
                $protoCategorias = NULL;
            }else{
                $protoPagina = $url[$elementosUrl-1];
                array_pop($url);
                $protoCategorias = $url;
            }

            $this->pagina = $protoPagina;
            $this->categorias = $protoCategorias;
        }else{ /* Caso contrário é a página inicial('home') */
            $this->pagina = 'home';
        }
    }

    /* cria array a partir do url */
    protected function manageUrl($url){
        // trim last slash if exists
        if(substr($url, -1) == '/'){
            $url = substr($url, 0, -1);
        }
        return explode('/', $url);
        //return $url;
    }
}
