<h1>Listado de Choferes</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">

        <li><a href=<?php echo (base_url(). 'index.php/choferes/nuevo')?>>Nuevo Chofer</a></li>
        <li><a href=<?php echo (base_url(). 'index.php/home')?>>Home</a></li>
        <li><a href="<?php echo (base_url() . 'index.php/logins/log_out') ?>">Cerrar Seccion</a></li>
    </ul>
</div>

<table class="table table-striped">
    
        <head>
        <th>Id Chofer</th>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apepat</th>
        <th>Apemat</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Opciones</th>
    </head>
    <tbody>
        <?php foreach ($choferes as $data){?>
                
        <tr>
            <td><?php echo $data->chofer_id; ?></td>
            <td><?php echo $data->rut; ?></td>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><?php echo $data->apemat; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->celular; ?></td>
            <!--<td><a href="<?php echo (base_url(). 'index.php/Ciudad/delete/'.$data->ciudad_id);?>">Eliminar</a>/<a href="<?php echo (base_url(). 'index.php/Ciudad/detail/'.$data->ciudad_id);?>">Ver Detalle</a>/<a href="<?php echo (base_url(). 'index.php/Ciudad/edit/'.$data->ciudad_id);?>">Modificar</a></td>-->
        <?php } ?> 
    </tbody>
     
</table>
