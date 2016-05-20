<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/moviles')?>>Menu Moviles</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="../update">
    <?php foreach ($Moviles as $data) { ?>
    
        <div class="form-group">
            <label for="movil_id">Movil id</label>
            <input type="text" class="form-control" name="movil_id" id="movil_id" readonly="readonly" value=<?php echo $data->movil_id; ?>>
        </div>
    <div class="form-group">
            <label for="numero">Numero Movil</label>
            <input type="text" class="form-control" name="numero" id="numero" value=<?php echo $data->numero; ?>>
        </div>
    <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="nombre" value=<?php echo $data->patente; ?>>
        </div>
    <div>
        Chofer<select class="form-control input-lg" name="chofer_id">
       <?php
            foreach ($Choferes as $data) {
                if($row->chofer_id == $data->chofer_id) {
                    echo '<option selected value="' . $data->chofer_id . '">' . $data->nombre . '</option>';
                } else {
                    echo '<option value="' . $data->chofer_id . '">' . $data->nombre . '</option>';
                }
            }
            ?>
            </select>
    </div>
    <div>
            Estado<select class="form-control input-lg" name="estado">
                
                    <option value=1>Activo</option>
                    <option value=0>Inactivo</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <?php } ?>
    </form>
