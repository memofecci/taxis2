<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/choferes') ?>">Choferes</a>
          <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/Moviles') ?>">Moviles</a>
          <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/Clientes') ?>">Clientes</a>
          <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/Operadoras') ?>">Operadoras</a>
          <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/Carreras') ?>">Carreras</a>
          <br>
          <a  class="navbar-brand" href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a>
        <li><a href=<?php echo (base_url(). 'index.php/carreras')?>>Menu Carreras</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="save">
    
        <div class="form-group">
            <label for="pasajero">Pasajero</label>
            <input type="text" class="form-control" name="pasajero" id="pasajero" placeholder="Ingrese Nombre Pasajero">
        </div>
    <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese Direccion de Retiro Pasajero">
        </div>
    <div class="form-group">
            <label for="observacion">Observacion</label>
            <input type="text" class="form-control" name="observacion" id="observacion" placeholder="Ingrese Observacion">
        </div>
       <div>
            Movil<select class="form-control input-lg" name="movil_id">
                <?php foreach ($Moviles as $data) { ?>
                    <option value=<?php echo $data->movil_id ?>><?php echo $data->numero; ?></option>

                <?php } ?>
            </select>
        </div>
    <div>
            Operadora<select class="form-control input-lg" name="operadora_id">
                <?php foreach ($Operadoras as $data) { ?>
                    <option value=<?php echo $data->operadora_id ?>><?php echo $data->nombre; ?></option>

                <?php } ?>
            </select>
        </div>
    <div>
            Clientes<select class="form-control input-lg" name="clientes">
                <?php foreach ($Clientes as $data) { ?>
                    <option value=otro>otro</option>
                    <option value=<?php echo $data->clientes_id ?>><?php echo $data->nombre; ?></option>
<?php } ?>
            </select>
        </div>
    <!--
    <div>
            Cliente<select class="form-control input-lg" name="clientes_id">
                <?php foreach ($Clientes as $data) { ?>
                    <option value=<?php echo $data->clientes_id ?>><?php echo $data->nombre; ?></option>

                <?php } ?>
            </select>
        </div>
-->        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
