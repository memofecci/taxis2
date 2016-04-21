<a href=<?php echo (base_url(). 'index.php/home')?>>Home</a><br>
<a href=<?php echo (base_url(). 'index.php/Ciudad')?>>Ciudad Menu</a><br>
<a href="<?php echo (base_url() . 'index.php/login/log_out') ?>">Cerrar Sesion</a>
<br>

<h1>Listado de Ciudades</h1><br>
<a href="Ciudad/">volver</a><br>
<table border="1">
    
        <head>
        <th>Nombre</th>
    </head>
    <tbody>
        <?php foreach ($ciudad as $data){?>
                
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><a href="<?php echo 'Ciudad/delete/'.$data->ciudad_id;?>">Eliminar</a></td>
            <td><a href="<?php echo 'Ciudad/detail/'.$data->ciudad_id;?>">Ver Detalle</a></td>
        </tr>
        <?php } ?> 
    </tbody>
     
</table>
