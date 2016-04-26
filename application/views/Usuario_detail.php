<h1>Listado de Usuarios</h1><br>
<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <a href=<?php echo (base_url() . 'index.php/home') ?>>Home</a>
        <a href=<?php echo (base_url(). 'index.php/Usuario')?>>Usuario Menu</a>
        <a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a>
    </ul>
</div><!--/.nav-collapse -->
<hr>

<h1>Listado de Usuarios</h1><br>
<table class="table table-striped">
    
        <head>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </head>
    <tbody>
        <?php foreach ($Usuario as $data){?>
                
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><a href="<?php echo 'Usuario/delete/'.$data->usuario_id;?>">Eliminar</a> / <a href="<?php echo 'Usuario/detail/'.$data->usuario_id;?>">Ver Detalle</a></td>
        </tr>
        <?php } ?> 
    </tbody>
     
</table>

