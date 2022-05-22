<?php
    include "core/include/constants.inc.php";
    include "core/include/functions.inc.php";
    include "core/classes/database.class.php";
    include "core/classes/manageGet.class.php";
    include "core/classes/application.class.php";
    
    $app = new application;

    /* temporário */
    //$teste = preg_match('/^[a-zA-Z0-9_-]*$/', 'as-asas');

    /* carregar classes */

    /* HTML HEAD */
    include "site/html/head.php";
    
    /* HTML BODY*/
    /* PÁGINA HEADER */
    include "site/html/header.php";

    /* CONTEUDO */
    #include "site/content/".$page.".php";
    include "site/content/".$app->pagina.".php";

    /* PÁGINA FOOTER */
    include "site/html/footer.php";

    /* HTML FIM */
    include "site/html/foot.php";
?>
