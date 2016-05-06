<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/moviles')?>>Menu Moviles</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="save">
    
        <div class="form-group">
            <label for="numero">Numero Movil</label>
            <input type="text" class="form-control" name="numero" id="numero" placeholder="Ingrese Numero Movil">
        </div>
    <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="nombre" placeholder="Ingrese Patente Movil">
        </div>
       <div>
            Chofer:<select class="form-control input-lg" name="chofer_id">
                <?php foreach ($Choferes as $data) { ?>
                    <option value=<?php echo $data->chofer_id ?>><?php echo $data->nombre; ?></option>

                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
