<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/clientes')?>>Menu Clientes</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="save">
    
        
    <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre">
        </div>
    <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese Direccion">
        </div>
    <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese Telefono">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>