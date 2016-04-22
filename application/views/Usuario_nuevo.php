<a href=<?php echo (base_url(). 'index.php/home')?>>Home</a><br>
<a href=<?php echo (base_url(). 'index.php/Usuario')?>>Usuario Menu</a><br>
<a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a>
<hr>

<form method="post" action="save">
    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre">
        </div>
        <div class="form-group">
            <label for="apepat">Apepat</label>
            <input type="text" class="form-control" name="apepat" id="apepat" placeholder="Ingrese Apellido Paterno">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username"id="usuername" placeholder="Ingrese Usuario">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese password">
        </div>
        <div>
            Ciudad_id:<select class="form-control input-lg" name="ciudad_id">
                <?php foreach ($ciudad as $ciu) { ?>
                    <option value=<?php echo $ciu->ciudad_id ?>><?php echo $ciu->nombre; ?></option>

                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
    
    
    
    <!--
Nombre:<input type="text" name="nombre"><br>
Apepat:<input type="text" name="apepat"><br>
Usuario:<input type="text" name="username"><br>
Clave:<input type="password" name="password"><br>
Ciudad_id:<select name="ciudad_id">
                    <?php foreach ($ciudad as $ciu) { ?>
    <option value=<?php echo $ciu->ciudad_id?>><?php echo $ciu->nombre; ?></option>
    
                    <?php } ?>
                    </select>
<input type="submit" value="guardar">

</form>-->
