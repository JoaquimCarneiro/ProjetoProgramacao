  <header>
    <h1>Login</h1>
    
  </header>
  <p>...login...</p>
  <form action="process.php" method="POST">
      <fieldset>
          <label>Utilizador </label>
          <input type="text" name="user" maxlength="30" value="user">
      </fieldset>
      <fieldset>
          <label>Password </label>
          <input type="password" name="pass" maxlength="30" value="password">
      </fieldset>
      <fieldset>
          <label>Lembrar</label>
          <input type="checkbox" name="remember" >
      </fieldset>
      <fieldset>
          <!--<input type="hidden" name="sublogin" value="1">-->
          <input type="submit" name="sublogin" value="Submeter" >
      </fieldset>
  </form>
  
  <?php debug(true,  get_defined_vars()); ?>
