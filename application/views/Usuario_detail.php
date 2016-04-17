<a href=<?php echo (base_url(). 'index.php/home')?>>Home</a><br>
<a href=<?php echo (base_url(). 'index.php/Usuario')?>>Usuario Menu</a><br>

<h1>Listado de Usuarios</h1><br>
<a href="Usuario/">volver</a><br>
<table border="1">
    
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
            <td><a href="<?php echo 'Usuario/delete/'.$data->usuario_id;?>">Eliminar</a></td>
            <td><a href="<?php echo 'Usuario/detail/'.$data->usuario_id;?>">Ver Detalle</a></td>
        </tr>
        <?php } ?> 
    </tbody>
     
</table>

