<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/operadoras')?>>Menu Operadoras</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="../update">
    <?php foreach ($Operadoras as $data) { ?>
    
        <div class="form-group">
            <label for="operadora_id">ID</label>
            <input type="text" class="form-control" name="operadora_id" id="chofer_id" readonly="readonly" value=<?php echo $data->operadora_id; ?>>
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
            <label for="username">Usuaria</label>
            <input type="text" class="form-control" name="username" id="username" value=<?php echo $data->username; ?>>
        </div>
    <div class="form-group">
            <label for="password">Clave</label>
            <input type="password" class="form-control" name="password" id="password" value=<?php echo $data->password; ?>>
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
