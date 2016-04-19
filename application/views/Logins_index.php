<h1>Ingresar a Sistema</h1>
<br>
<hr>
<form method="post" action="<?php echo (base_url() .  'index.php/logins/log_in')?>">
<table border="1">
    <tr>
        <td>Nombre Usuario</td><td><input type="text" name="username"</td>
    </tr>
    <tr>
        <td>Clave</td><td><input type="password" name="password"</td>
    </tr>
    <tr>
        <td><input type="submit" valuer="Iniciar Sesion"></td>
    </tr>
</table>
</form>

