<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/choferes')?>>Menu Choferes</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="../update">
    <?php foreach ($Choferes as $data) { ?>
    
        <div class="form-group">
            <label for="chofer_id">ID</label>
            <input type="text" class="form-control" name="chofer_id" id="chofer_id" readonly="readonly" value=<?php echo $data->chofer_id; ?>>
        </div>
    <div class="form-group">
            <label for="rut">Rut</label>
            <input type="text" class="form-control" name="rut" id="rut" value=<?php echo $data->rut; ?>>
        </div>
    <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value=<?php echo $data->nombre; ?>>
        </div>
        <div class="form-group">
            <label for="apepat">Apellido Paterno</label>
            <input type="text" class="form-control" name="apepat" id="apepat" value=<?php echo $data->apepat; ?>>
        </div>
    <div class="form-group">
            <label for="apemat">Apellido Materno</label>
            <input type="text" class="form-control" name="apemat" id="apemat" value=<?php echo $data->apepat; ?>>
        </div>
    <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value=<?php echo $data->direccion; ?>>
        </div>
    <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" name="celular" id="celular" value=<?php echo $data->celular; ?>>
        </div>
    <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value=<?php echo $data->estado; ?>>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
        <?php } ?>
    </form>