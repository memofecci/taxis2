<h1>Listado de Usuarios</h1><br>
<a href=<?php echo (base_url(). 'index.php/usuario/nuevo') ?>>nuevo Usuario</a><br>
<table border="1">
    
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
            <td><a href="<?php echo 'Usuario/delete/'.$data->usuario_id;?>">Eliminar</a></td>
            <td><a href="<?php echo 'Usuario/detail/'.$data->usuario_id;?>">Ver Detalle</a></td>
        </tr>
        <?php } ?> 
    </tbody>
     
</table>

