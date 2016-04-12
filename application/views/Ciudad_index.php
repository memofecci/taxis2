<h1>Listado de CIudad</h1><br>
<a href="Ciudad/nuevo">Nueva Ciudad</a><br>
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
            <td><a href="<?php echo 'Ciudad/delete/'.$data->ciudad_id;?>">Eliminar</a></td>
            <td><a href="<?php echo 'Ciudad/detail/'.$data->ciudad_id;?>">Ver Detalle</a></td>
            <td><a href="<?php echo 'Ciudad/edit/'.$data->ciudad_id;?>">Modificar</a></td>
        <?php } ?> 
    </tbody>
     
</table>


