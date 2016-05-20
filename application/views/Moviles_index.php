<h1>Listado de Moviles</h1><br>

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href=<?php echo (base_url() . 'index.php/home') ?>>Home</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/Moviles/nuevo') ?>>Nuevo Movil</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/Moviles/buscar') ?>>Buscar</a></li>
        <li><a href=<?php echo (base_url() . 'index.php/Moviles/history') ?>>Historial</a></li>
    </ul>
</div>

<table class="table table-striped">

    <head>
    <th>Id</th>
    <th>Numero</th>
    <th>Patente</th>
    <th>Opciones</th>
</head>
<tbody>
    <?php foreach ($Moviles as $data) { ?>

        <tr>     
            <td><?php echo $data->movil_id; ?></td>
            <td><?php echo $data->numero; ?></td>
            <td><?php echo $data->patente; ?></td>
            <td><a href="<?php echo (base_url() . 'index.php/Moviles/detail/' . $data->movil_id); ?>">Ver Detalle</a>/<a href="<?php echo (base_url() . 'index.php/Moviles/edit/' . $data->movil_id); ?>">Modificar</a></td>
        <?php } ?> 
</tbody>

</table>
