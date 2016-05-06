<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/carreras')?>>Menu Carreras</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="../update">
    <?php foreach ($Carreras as $data) { ?>
    
        <div class="form-group">
            <label for="carrera_id">ID</label>
            <input type="text" class="form-control" name="carrera_id" id="carrera_id" value=<?php echo $data->carrera_id; ?> readonly="readonly">
        </div>
    <div class="form-group">
            <label for="horainicio">Hora inicio</label>
            <input type="text" class="form-control" name="horainicio" id="horainicio" value=<?php echo $data->horainicio; ?> readonly="readonly">
        </div>
    <div class="form-group">
            <label for="valor">valor</label>
            <input type="text" class="form-control" name="valor" id="valor" value=<?php echo $data->valor; ?>>
        </div>
        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input type="text" class="form-control" name="observacion" id="observacion" value=<?php echo $data->observacion; ?>>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
        <?php } ?>
    </form>
