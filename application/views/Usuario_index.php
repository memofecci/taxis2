<h1>Listado de Usuarios</h1><br>
<a href=<?php echo (base_url(). 'index.php/usuario/nuevo') ?>>nuevo Usuario</a><br>
<a href=<?php echo (base_url(). 'index.php/home')?>>Home</a><br>
<a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a>
<table class="table table-striped">
    
        <head>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Ciudad</th>
        <th>Acciones</th>
    </head>
    <tbody>
        <?php foreach ($usuario as $data){?>
                
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->nomciudad; ?></td>
             <td><a href="<?php echo (base_url() . 'index.php/usuario/delete/' .$data->usuario_id ) ?>">Eliminar</a> /<a href="<?php echo (base_url() . 'index.php/usuario/detail/' .$data->usuario_id ) ?>">Ver Detalle</a> /<a href="<?php echo (base_url() . 'index.php/usuario/edit/' .$data->usuario_id ) ?>">Editar</a></td>
        </tr>
        <?php } ?> 
    </tbody>
     
</table>