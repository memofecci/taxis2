<h1>Listado de Carreras</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url(). 'index.php/carreras')?>>Home Carreras</a></li>
    </ul>
</div>

<table class="table table-striped">
    
        <head>
        <th>ID</th>
        <th>Pasajeros</th>
        <th>Direccion</th>
        <th>Hora de Inicio</th>
        <th>Hora de Termino</th>
        <th>Valor</th>
        <th>Observacion</th>
        <th>Operadora</th>
        <th>Movil</th>
        <th>Cliente</th>
    </head>
    <tbody>
        <?php foreach ($Carreras as $data){?>
                
        <tr>     
            <td><?php echo $data->carrera_id; ?></td>
            <td><?php echo $data->pasajero; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->horainicio; ?></td>
            <td><?php echo $data->horatermino; ?></td>
            <td><?php echo $data->valor; ?></td>
            <td><?php echo $data->observacion; ?></td>
            <td><?php echo $data->operadora_id; ?></td>
            <td><?php echo $data->movil_id; ?></td>
            <td><?php echo $data->clientes_id; ?></td>
            <!--<td><a href="<?php echo (base_url(). 'index.php/Carreras/detail/'.$data->carrera_id);?>">Ver Detalle</a>/<a href="<?php echo (base_url(). 'index.php/Carreras/edit/'.$data->carrera_id);?>">Modificar</a></td>-->
        <?php } ?> 
    </tbody>
     
</table>