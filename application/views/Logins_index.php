<h1>Ingresar a sistema</h1>
<br>
<a href="<?php echo (base_url() . 'index.php/login/log_out') ?>">Cerrar Sesion</a>
<br>
<hr>
<form method="post" action="<?php echo (base_url() . 'index.php/login/log_in') ?>">
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
</form>

