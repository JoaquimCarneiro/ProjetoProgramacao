<div class="bloco_menu">
    <ul class="menu_principal">
        <?php
            if(LOGIN_UNICO){
        ?>
        <li><a href="/login">Login</a></li>
        <?php
            }else{
        ?>
        <ul class="login">
            <li class="login_titulo">Menu</li>
            <li class="login_menu">
                <ul>
                    <li><a href="login">Entrar</a></li>
                    <li><a href="register">Registar</a></li>
                    <li><a href="recover">Recuperar</a></li>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </ul>
</div>
