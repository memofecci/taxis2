<h1>Listado de Ciudad</h1><br>
<a href=<?php echo (base_url(). 'index.php/ciudad/nuevo')?>>Nueva Ciudad</a><br>
<a href=<?php echo (base_url(). 'index.php/home')?>>Home</a><br>
<a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Sesion</a>
<table border="1">
    
        <head>
        <th>Id Ciudad</th>
        <th>Nombre</th>
        <th>Opciones</th>
    </head>
    <tbody>
        <?php foreach ($ciudad as $data){?>
                
        <tr>
            <td><?php echo $data->ciudad_id; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><a href="<?php echo (base_url(). 'index.php/Ciudad/delete/'.$data->ciudad_id);?>">Eliminar</a>/<a href="<?php echo (base_url(). 'index.php/Ciudad/detail/'.$data->ciudad_id);?>">Ver Detalle</a>/<a href="<?php echo (base_url(). 'index.php/Ciudad/edit/'.$data->ciudad_id);?>">Modificar</a></td>
        <?php } ?> 
    </tbody>
     
</table>


