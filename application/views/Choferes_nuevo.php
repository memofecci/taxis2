<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/home')?>>Home</a></li>
        <li><a href=<?php echo (base_url(). 'index.php/choferes')?>>Menu Choferes</a></li>
        <li><a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="save">
    
        <div class="form-group">
            <label for="rut">Rut</label>
            <input type="text" class="form-control" name="rut" id="rut" placeholder="Ingrese Rut">
        </div>
    <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre">
        </div>
        <div class="form-group">
            <label for="apepat">Apellido Paterno</label>
            <input type="text" class="form-control" name="apepat" id="apepat" placeholder="Ingrese Apellido Paterno">
        </div>
    <div class="form-group">
            <label for="apemat">Apellido Materno</label>
            <input type="text" class="form-control" name="apemat" id="apemat" placeholder="Ingrese Apellido Materno">
        </div>
    <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese Direccion">
        </div>
    <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" name="celular" id="celular" placeholder="Ingrese Celular">
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
