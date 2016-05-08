<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/clientes')?>>Menu Clientes</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="../update">
    <?php foreach ($Clientes as $data) { ?>
    
        <div class="form-group">
            <label for="clientes_id">ID</label>
            <input type="text" class="form-control" name="clientes_id" id="clientes_id" readonly="readonly" value=<?php echo $data->clientes_id; ?>>
        </div>
    <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value=<?php echo $data->nombre; ?>>
        </div>
    <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value=<?php echo $data->direccion; ?>>
        </div>
    <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value=<?php echo $data->telefono; ?>>
        </div>
    <div>
            Estado<select class="form-control input-lg" name="estado">
                
                    <option value=1>Activo</option>
                    <option value=0>Inactivo</option>

            </select>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
        <?php } ?>
    </form>

