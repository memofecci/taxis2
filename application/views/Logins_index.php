

    <div class="container"><!--donde se trabaja-->
        <br><br>
        <h1>Ingreso a Sistema</h1>
        <hr><br>
          <form method="post" action="<?php echo (base_url() . 'index.php/logins/log_in') ?>">
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Ingrese su Usuario">
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Ingresar a Sistema</button>
          </form>
      </div>

    </div><!-- /.container -->


   



<!--<h1>Ingresar a sistema</h1>
<br>
<hr>
<form method="post" action="<?php echo (base_url() . 'index.php/logins/log_in') ?>">
<table border="1">
    <tr>
        <td>Nombre de usuario:</td><td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Clave:</td><td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Iniciar Sesion"></td>
    </tr>
</table>
</form>-->

