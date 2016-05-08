<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/carreras')?>>Menu Carreras</a></li>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<form method="post" action="save">
    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre ">
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
            <label for="ussername">Usuario</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese Nombre Usuario">
        </div>
    <div class="form-group">
            <label for="ussername">Usuario</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese Nombre Usuario">
        </div>
    <div class="form-group">
            <label for="password">Clave</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese Clave Usuario">
        </div>
       <div>
            Movil<select class="form-control input-lg" name="movil_id">
                    <option value="Administrador">Administrador</option>
                    <option value="Operadora">Operadora</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>

