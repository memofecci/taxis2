
<h1>detalle carrera</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url() . 'index.php/carreras') ?>>Menu Carreras</a></li>
    </ul>
</div><!--/.nav-collapse -->

<table class="table table-striped">

    <head>
    <th>Id</th>
    <th>Pasajero</th>
    <th>Direccion</th>
    <th>Movil</th>
    <th>Operadora</th>
</head>
<tbody>
    <?php foreach ($Carreras as $data) { ?>

        <tr>            
            <td><?php echo $data->carrera_id; ?></td>
            <td><?php echo $data->pasajero; ?></td>
            <td><?php echo $data->direccion; ?></td>
            <td><?php echo $data->movil_id; ?></td>
            <td><?php echo $data->operadora_id; ?></td>
        <?php } ?> 
</tbody>

</table>

